<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Photo;
use App\PhotoDetails;
use App\Album;
use App\User;

// use App\Upload;

class UploadController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadForm()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $photos = Photo::orderBy('created_at', 'desc')->get();
        $photo_details = PhotoDetails::orderBy('created_at', 'desc')->paginate(10);
        return view('/school/students/photo_album/upload_form', [
        'photo_details' => $user->photo_details,
        'photos' => $user->photos,
    ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function uploadForm2()
    // {
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
    //     $photo = Photo::orderBy('created_at', 'desc')->get();
    //     return view('/school/students/photo_album/upload_form')->with('photo', $user->photo);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadSubmit(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'title' => 'required',
            'photos'=>'required'
            ]);
    
            if($request->hasFile('photos'))        
            {
            $allowedfileExtension=['peg','jpeg','jpg','png','gif','svg','docx'];
            $files = $request->file('photos');
            
            foreach($files as $file){
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);
            
            //dd($check);
            if($check)
            {

            $photos= Photo::create([
                'user_id' => $user->id,
                'title' => $request->title
            ]);
            // $photos = Photo::create($request->all());
            foreach ($request->photos as $photo) {
            $filename = $photo->store('public/galleries');

            PhotoDetails::create([
            'photo_id' => $photos->id,
            'filename' => $filename = substr($filename, 7),
            'user_id' => $user->id
            ]);

            }
            
            // echo "Upload Successfully";
            return redirect('/dashboard/school/students/photo_album/upload_form')->with('success', 'Photos Upload Successfull');
            
            }
            
            else
            
            {
            
            // echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg ,svg, doc</div>';
            return redirect('/dashboard/school/students/photo_album/upload_form')->with('error', 'Photos Uploading Failed, Only upload png,jpeg,peg,gif,svg,doc');
            
            }
            
            }
            
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $photos = Photo::where('id', $id)->get();
       $photo_details = PhotoDetails::where('photo_id', $id)->get();
       return view('/school/students/photo_album/show', compact('photos', 'photo_details'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::where('id', $id)->get();
        $photo->delete();
       $photo_detail = PhotoDetails::where('photo_id', $id)->get();
       $photo_detail->delete();
       return view('/school/students/photo_album/delete')->with('photo', $photo)->with('photo_detail', $photo_detail);
    }
}
