<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Testimony;
use App\User;
use Ramsey\Uuid\Uuid;

class TestimonyController extends Controller
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
        $testimonies = Testimony::orderBy('created_at', 'DESC')->get();
        return view('/school/students/testimony/index')->with(['testimonies' => $user->testimonies]);
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
        $testimony = Testimony::where('user_id', $user->id)->get();
        if(count($testimony) == 6){
            return redirect()->back()->with('success', 'You have reach the maximum limit for Testimony, you can only delete or update/edit the previous one you created');
        }

        $this->validate($request, [
            'content' => 'required|string',
            'name' => 'required|string'
        ]);

        $testimony = new Testimony;
        $testimony->uuid = Uuid::uuid4();
        $testimony->content = $request->content;
        $testimony->name = $request->name;
        $testimony->user_id = $user->id;
        $testimony->save();

        return redirect('/dashboard/school/students/testimony/index')->with('success', 'Testimony created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $testimonies = Testimony::where('uuid', $uuid)->first();
        return view('/school/students/testimony/show', compact('testimonies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $testimony = Testimony::where('uuid', $uuid)->first();
        return view('/school/students/testimony/edit', compact('testimony'));
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
            'content' => 'required|string',
            'name' => 'required|string'
        ]);
            if($request->uuid){
                $testimony = Testimony::where('uuid', $uuid)->first();
                if(!$testimony){
                    return redirect()->back()->with('error', 'Testimony not found');
                }
            }
        // $testimony->uuid = Uuid::uuid4();
        $testimony->content = $request->content;
        $testimony->name = $request->name;
        $testimony->user_id = $user->id;
        $testimony->save();

        return redirect('/dashboard/school/students/testimony/index')->with('success', 'Testimony Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $testimony = Testimony::where('uuid', $uuid)->first();
        $testimony->delete();
        return redirect()->back()->with('success', 'Testimony Deleted Successfull');
    }
}
