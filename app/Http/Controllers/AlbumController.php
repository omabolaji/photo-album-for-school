<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Album;
use Ramsey\Uuid\Uuid;

class AlbumController extends Controller
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

        $albums = Album::orderBy('created_at', 'DESC')->get();
        return view('/school/school_admin/class_albums/index', compact('albums'));
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
        $album = Album::where('user_id', $user->id)->get();
        $this->validate($request, [
            'album_diary' => 'required|string'
        ]);
        $album = new Album;
        $album->uuid = Uuid::uuid4();
        $album->album_diary = $request->album_diary;
        $album->user_id = $user->id;
        $album->save();

        return redirect('dashboard/school/school_admin/class_albums/index')->with('success', 'Class Photo Album Created Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $albums = Album::where('uuid', $uuid)->first();
        return view('/school/school_admin/class_albums/index')->with('albums', $albums);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $album = Album::where('uuid', $uuid)->first();
        return view('/school/school_admin/class_albums.edit', compact('album'));
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
            'album_diary' => 'required|string'
        ]);
        if($request->uuid){
            $album = Album::where('uuid', $request->uuid)->first();
            if(!$album){
                return redirect()->back()->with('error', 'Class Album Not Found!');
            }
        }
        $album->album_diary = $request->album_diary;
        $album->user_id = $user->id;
        $album->save();

        return redirect('/dashboard/school/school_admin/class_albums/index')->with('success', 'Class Album Updated successfull');
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
