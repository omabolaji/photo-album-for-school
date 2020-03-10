<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Image;
use App\User;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
        return view('/school/students/blogs/blog')->with('blogs', $user->blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $blogs = Blog::where('uuid', Auth::user()->id)->get();
        // return view('/school/student/blogs/blog', compact('blogs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,gif,png'
        ]);

        $user = Auth::user();
        $blog = new Blog;
        $blog->uuid = Uuid::uuid4();
        $blog->title = $request->title;
        $blog->content = $request->content;

        $file   = $request->file('image');

            $image = Image::make($file);

            $new_image = $image->resize(850,530);//Images resizer

            $path = "public/blogs".$user->id."_".time().".".$file->getClientOriginalExtension();

            Storage::put($path, $new_image->encode());
            $blog->image = substr($path, 7);
            $blog->user_id = $user->id;
            $blog->save();

        return redirect('/dashboard/school/students/blogs/blog')->with('success', 'Blog created Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $blogs = Blog::where('uuid', $uuid)->first();
        return view('/school/students/blogs/show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $blog = Blog::where('uuid', $uuid)->first();
        return view('/school/students/blogs/edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);

        if($request->uuid){
            $blog = Blog::where('uuid', $request->uuid)->first();
            if(!$blog){
                return redirect()->back()->with('error', 'Blog Not Found!');
            }
        }

        $blog->title = $request->title;
        $blog->content = $request->content;

        $file   = $request->file('image');

            $image = Image::make($file);

            $new_image = $image->resize(850,530);//Images resizer

            $path = "public/blogs".$user->id."_".time().".".$file->getClientOriginalExtension();

            \Storage::put($path, $new_image->encode());
            $blog->image = substr($path, 7);
            $blog->user_id = $user->id;
            $blog->save();

            return redirect('/dashboard/school/students/blogs/blog')->with('success', 'Blog Updated Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $blog = Blog::where('uuid', $uuid)->first();
        $blog->delete();
        return redirect()->back()->with('success', 'Blog Deleted');
    }
}
