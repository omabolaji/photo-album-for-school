<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Photo;
use App\PhotoDetails;
use App\Comment;
use App\Blog;
use App\Contact;
use App\Testimony;
use Ramsey\Uuid\Uuid;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $photo_details = PhotoDetails::
        // join('photos', 'photos.id', '=', 'photo_details.photo_id')
        // ->select('photo_details.filename', 'photos.title')
        // // ->orderBy('created_at', 'desc')
        orderBy('created_at', 'desc')
        ->paginate(12);
        // ->get();
        return view('home', compact('photo_details'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogs()
    {
        $comments = Comment::orderBy('created_at', 'DESC')->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(8);
        $popularBlog = Blog::orderBy('created_at', 'DESC')->limit(4)->get();
        return view('blogs', [
            'blogs' => $blogs,
            'comments' => $comments,
            'popularBlog' => $popularBlog
        ]);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function singleBlog($uuid)
    {
        $popularBlog = Blog::orderBy('created_at', 'DESC')->limit(4)->get();
        $comments = Comment::orderBy('created_at', 'DESC')->paginate(3);
        $blog = Blog::where('uuid', $uuid)->first();
        if(!$blog){
            return redirect()->back();
        }
        return view('single-blog', [
            'blog' => $blog,
            'comments' => $comments,
            'popularBlog' => $popularBlog
        ]);

    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutUsAndTestimony()
    {
        $testimonies = Testimony::orderBy('created_at', 'DESC')->get();
        $abouts = About::orderBy('id', 'DESC')->get();
        return view('about-us',[
            'testimonies' => $testimonies,
            'abouts' => $abouts,
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gallery()
    {
        $photo_details = PhotoDetails::
        orderBy('created_at', 'desc')
        ->get();
        // join('photos', 'photos.id', '=', 'photo_details.photo_id')
        // ->select('photo_details.filename', 'photos.title')
        // // ->orderBy('created_at', 'desc')
        // ->get();

        return view('gallery', compact('photo_details'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send_contact(Request $request)
    {
        // $this->validate($request, [
        //   'name' => 'required|string',
        //   'email' => 'required|string' ,
        //   'subject' => 'required|string',
        //   'message' => 'required|string'
        // ]);

        $contact = new Contact;
        $contact->uuid = Uuid::uuid4();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return redirect()->back()->with('success', 'Message Sent Successfully!');
    }


        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactUs()
    {
        return view('contact-us');
    }


}
