<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Dashboard;
use App\User;
use Ramsey\Uuid\Uuid;
use App\Blog;
use App\PhotoDetails;
use App\Photo;
use Illuminate\Notifications\Messages\SimpleMessage;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
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
        $blogs = Blog::get();
        $photo_details = PhotoDetails::get();
        $photos = Photo::get();
        $admins = Dashboard::get();

        return view('dashboard')->with(['blogs' => $user->blogs,'photos'=> $user->photos, 'photo_details' => $user->photo_details, 'admins' => $user->admins]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $admins = Dashboard::orderBy('created_at', 'DESC')->get();
        return view('/school/profiles/details')->with('admins', $user->admins);
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
        // $user = Auth::user();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $admins = Dashboard::where('user_id', $user->id)->get();
        if(count($admins) == 1){
            // $type = 'success';
            // $message = 'You can not have more than One Profile!. Thanks';
            return redirect()->back()->with(['success' => 'You can not have more than One Profile!. Thanks']);
        }
        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);

        // if($request->image){
            // $this->validate($request, [
            // 'image' => 'required|file|mimes:jpeg,peg,png,gif'
            // ]);
            // $image = $request->image->store('public/profiles');
        // }else{
            // $image = 'public/profiles/face1.jpg';
        // }

        $admin = new Dashboard;
        $admin->uuid = Uuid::uuid4();
        $admin->firstName = $request->firstName;
        $admin->lastName = $request->lastName;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->gender = $request->gender;
        $admin->user_id = $user->id;
        $image = $request->image->store('public/profiles');
        $admin->image = substr($image, 7);
        // $message = 'Profile Created';
        // $type = 'success';
        $admin->save();

        return redirect()->back()->with([ 'success' => 'Profile Created']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $admins = Dashboard::where('uuid', $uuid)->first();
        return view('/school/profiles/show', compact('admins',$user->admins));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $admin = Dashboard::where('uuid', $uuid)->first();
        return view('/school/profiles/edit',compact('admin', $user->admin));
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
        // $user = Auth::user();
        $this->validate($request, [
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);

        if($request->uuid){
            $admin = Dashboard::where('uuid', $request->uuid)->first();
            if(!$admin){
                // $type = 'error';
                // $message = 'Profile not found!';
                return redirect()->back()->with(['error' => 'Profile not found!']);
            }
        }else{

        // $admin->uuid = Uuid::uuid4();


        // if($request->image){
        //     $this->validate($request, [
        //     'image' => 'required|file|mimes:jpeg,peg,png,gif'
        //     ]);
        //     $image = $request->image->store('public/profiles');
        // }else{
        //     $image = 'public/profiles/face1.jpg';
        // }

        $admin->firstName = $request->firstName;
        $admin->lastName = $request->lastName;
        $admin->phone = $request->phone;
        $admin->address = $request->address;
        $admin->gender = $request->gender;
        $image = $request->image->store('public/profiles');
        $admin->image = substr($image, 7);
        // $admin->image = substr($image, 7);
        $admin->user_id = $user->id;
        // $message = 'User Profile Updated Successfull';
        // $type = 'success';
        $admin->save();

        return redirect()->back()->with(['success' => 'User Profile Updated Successfull']);
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
