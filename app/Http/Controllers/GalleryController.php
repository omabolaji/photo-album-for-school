<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Photo;
use App\PhotoDetails;
use App\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $galleries = Gallery::orderBy('created_at', 'DESC')->get();
        return view('/school/students/photo_album/create')->with('galleries', $user->galleries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'file|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($request->hasFile('filename'))
        {
            foreach($request->file('filename') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->getClientOriginalExtension();
                $image->move(public_path('public/images').'/images', $name);
                // $name = substr($image, 7);
                // $name = substr($image, 7);
                $data[] = $name;
            }
        }

        $gallery = new Gallery;
        $gallery->filename = json_encode($data);
        // $gallery->filename = substr($filename, 7),
        $gallery->uuid = Uuid::uuid4();
        $gallery->user_id = $user->id;
        $gallery->save();

        return redirect()->back()->with('success', 'Your Image Has Been Successfull Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            // 'name' => 'required',
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
            // $album = Album::create($request->all());
            $photos= Photo::create($request->all());
            // $photo = Photo::where('user_id', $user->id)->get();
            // $photo->user_id = $user->id;
            foreach ($request->photos as $photo) {
            $filename = $photo->store('public/galleries');

            PhotoDetails::create([
            'photo_id' => $photos->id,
            // 'album_id' => $album->id,
            'filename' => $filename = substr($filename, 7),
            'user_id' => $user->id
            ]);
            // $photoDetail = PhotoDetails::where('user_id', $user->id)->get();
            // $photoDetail->user_id = $user->id;
            }

            // echo "Upload Successfully";
            return redirect()->back()->with('success', 'Photos Upload Successfull');

            }

            else

            {

            // echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg ,svg, doc</div>';
            return redirect()->back()->with('error', 'Photos Uploading Failed, Only upload png,jpeg,peg,gif,svg,doc');

            }

            }

            }
    }
}
