<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use Ramsey\Uuid\Uuid;
use App\Blog;
use App\Dashboard;
use App\User;

class CommentController extends Controller
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
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        return view('/school/comments/blog-details', compact('comments'));
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
        
        $this->validate($request, [
            
                'content' => 'required|string'
            ]);
        

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['uuid'] = Uuid::uuid4();
    
        Comment::create($input);
   
        return back();

        // $user_id = auth()->user()->id;
        // $user = User::find($user_id);

        // if($request->id){
        //     $blog = Blog::where('blog_id', $request->id)->get();
               
        // }
        // $this->validate($request, [
            
        //     'content' => 'required|string'
        // ]);
       
        // $comment = new Comment;
        // $comment->uuid = Uuid::uuid4();
        // $comment->user_id = $user->id;
        // $comment->blog_id = $blog->id;
        

        // $comment->comment_name = $user->name;
        // $comment->comment_pic = $profile->image;
        // $comment->content = $request->content;
        // $comment->save();

        // return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function save(Request $request)
    // {
        
    //     $this->validate($request, [
    //         // 'name' => 'required|string',
    //         'content' => 'required|string'
    //     ]);
    //     $user = Auth::user();
    //     $blog = Auth::user();
    //     $comment = new Comment;
    //     $comment->uuid = Uuid::uuid4();
    //     // $comment->name = $request->name;
    //     $comment->content = $request->content;
    //     $comment->user_id = $user->id;
    //     $comment->blog_id = $blog->uuid;
    //     $comment->save();

    //     return redirect('/school/comments/blog-details');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $comments = Comment::where('uuid', $uuid)->first();
        return view('/school/comments/blog-details', compact('comments'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function commentAll($uuid)
    {
        $comments = Comment::where('uuid', $uuid)->first();
        return view('/school/comments/blog-details', compact('comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $comment = Comment::where('uuid', $uuid)->first();
        return view('/school/comments/blog-details', compact('comment'));
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
    public function destroy($uuid)
    {
        $comment = Comment::where('uuid', $uuid)->first();
        $comment->delete();
        return redirect()->back();
    }
}
