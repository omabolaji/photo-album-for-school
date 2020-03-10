<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\About;
use Ramsey\Uuid\Uuid;

class AboutController extends Controller
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
        $abouts = About::get();
        return view('/dashboard/school/school_admin/about/index', compact('abouts'));
    }

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
    public function store(Request $request)
    {
        $user = Auth::user();
        $about = About::where('user_id', $user->id)->get();
        if(count($about) == 1 ){
            return redirect()->back()->with('success', 'You can not have more than one About-Us Page!. You can only Edit/Update the one you have already created. Thanks');
        }
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,png,peg,gif'
        ]);

        $about = new About;
        $about->uuid = Uuid::uuid4();
        $about->title = $request->title;
        $about->content = $request->content;

        $file   = $request->file('image');

            $image = Image::make($file);

            $new_image = $image->resize(900,450);//Images resizer

            $path = "public/abouts".$user->id."_".time().".".$file->getClientOriginalExtension();

            \Storage::put($path, $new_image->encode());
        $about->image = substr($path, 7);
        $about->save();

        return redirect('/dashboard/school/school_admin/about/index')->with('success', 'About Page Updated');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $abouts = About::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/about/index', compact('abouts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $about = About::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/about/index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $user = Auth::user();
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);
            if($request->uuid){
                $about = About::where('uuid', $request->uuid)->first();
                if(!$about){
                    return redirect()->back()->with('error', 'About not found');
                }
            }else{

                $about->title = $request->title;
                $about->content = $request->content;
                $file   = $request->file('image');

                $image = Image::make($file);
    
                $new_image = $image->resize(900,450);//Images resizer
    
                $path = "public/abouts".$user->id."_".time().".".$file->getClientOriginalExtension();
    
                \Storage::put($path, $new_image->encode());
                $about->image = substr($path, 7);
                $about->user_id = $user->id;
                $about->save();
                return redirect('/dashboard/school/school_admin/about/index')->with('success', 'About page Updated');
            }
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
}
