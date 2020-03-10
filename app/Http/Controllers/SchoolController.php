<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\PhotoDetails;
use App\Testimony;
use App\Contact;
use Ramsey\Uuid\Uuid;
use App\Blog;
use App\Comment;

// use App\Session;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('school');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'DESC')->limit(8)->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(5);
        return view('/school/blog', [
            'blogs' => $blogs,
            'photos' => $photos,
            'comments' => $comments,
        ]);
        // return view('/school/blog')->with('blogs', $blogs)->with('photos', $photos)->with('comments', $comments);
    }

    public function blog_details($uuid)
    {

        $comments = Comment::orderBy('created_at', 'DESC')->paginate(5);
        $photos = Photo::orderBy('created_at', 'DESC')->limit(8)->get();
        $blog = Blog::where('uuid', $uuid)->first();
        if(!$blog){
            return redirect()->back();
        }
        $blogs = Blog::orderBy('created_at', 'DESC')->limit(6)->get();
        return view('/school/blog-details', [
            'blog' => $blog,
            'photos' => $photos,
            'comments' => $comments,
            'blogs' => $blogs
        ]);
        // return view('/school/blog-details')->with('blog', $blog)->with('photos', $photos)->with('comments', $comments)->with('blogs', $blogs);

    }

    // public function single_blog($uuid)
    // {
    //     $blog = Blog::where('uuid', $uuid)->first();
    //     return view('/school/blog-details', compact('blog'));
    // }

    public function all_comments($uuid)
    {
        $blog = Blog::where('uuid', $uuid)->first();
        $comments = Comment::orderBy('created_at', 'DESC')->paginate(5);
        return view('/school/comments/blog-details', [
            'blog' => $blog,
            'comments' => $comments,
        ]);
    }


    public function photo_albums()
    {
        return view('/school/photo-albums');
    }

    // public function()
    // {
    //     return view('school');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send_contact(Request $request)
    {
        $this->validate($request, [
          'name' => 'required|string',
          'email' => 'required|string' ,
          'subject' => 'required|string',
          'content' => 'required|string'
        ]);

        $contact = new Contact;
        $contact->uuid = Uuid::uuid4();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->content = $request->content;
        $contact->save();

        return redirect()->back()->with('success', 'Message Sent Successfully..Thanks For Contacting Us!');
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
    public function destroy($uuid)
    {
        // $user = Auth::user();
        $comment = Comment::where('uuid', $uuid)->first();
        $comment->delete();
        return reidrect()->back();
    }

    public function photos(){
        // $school = \Session::get('school');
        // $contacts = Contact::get();
        $photos = Photo::orderBy('created_at', 'desc')->limit(8)->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->limit(3)->get();
        $photo_details = PhotoDetails::orderBy('created_at', 'desc')->limit(3)->get();
        $testimonies = Testimony::orderBy('created_at', 'DESC')->get();
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        return view('school', [
            'photos'=> $photos,
            'photo_details' => $photo_details,
            'testimonies' => $testimonies,
            'blogs' => $blogs,
            'comments' => $comments,
        ]);

    }

    // public function photo_name(){
    //     // $school = \Session::get('school');
    //     $photos = Photo::orderBy('created_at', 'desc')->get();
    //     return view('school/photo-albums')->with('photos', $photos);
    // }

    public function photo_details(){
        // $school = \Session::get('school');
        $photos = Photo::orderBy('created_at', 'desc')->get();
        $photo_details = PhotoDetails::orderBy('created_at', 'desc')->paginate(5);
        $blogs = Blog::orderBy('created_at', 'desc')->limit(6)->get();
        return view('school/photo-albums', [
            'photo_details'=> $photo_details,
            'photos' => $photos,
            'blogs' => $blogs,
        ]);

    }

    // public function testimonies()
    // {
    //     $testimonies = Testimony::orderBy('created_at', 'DESC')->get();
    //     return view('school')->with('testimonies', $testimonies);
    // }

}
