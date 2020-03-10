<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slider;
use Ramsey\Uuid\Uuid;

class SliderController extends Controller
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
        return view('/dashboard/school/school_admin/sliders/index');
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
        $slider = Slider::where('user_id', $user->id)->get();
        $this->validate($request, [
            'title' => 'required|string',
            'title2' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);

        $slider = new Slider;
        $slider->uuid = Uuid::uuid4();
        $slider->title = $request->title;
        $slider->title2 = $request->title2;
        $slider->content = $request->content;

        $file   = $request->file('image');
        $image = Image::make($file);
        $new_image = $image->resize(1920,930);//Images resizer

        $path = "public/sliders".$user->id."_".time().".".$file->getClientOriginalExtension();

        \Storage::put($path, $new_image->encode());
        $slider->image = substr($path, 7);
        $slider->user_id = $user->id;
        $slider->save();
        return redirect()->back()->with('success', 'Slider Created for Home page Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $sliders = Slider::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/sliders/show', compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $slider = Slider::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/sliders/edit', compact('slider'));
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
            'title2' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|file|mimes:jpeg,peg,png,gif'
        ]);
        if($request->uuid){
            $slider = Slider::where('uuid', $request->uuid)->first();
            if(!$slider){
                return redirect()->back()->with('error', 'Slider not found');
            }
        }

        $slider->title = $request->title;
        $slider->title2 = $request->title2;
        $slider->content = $request->content;

        $file   = $request->file('image');
        $image = Image::make($file);
        $new_image = $image->resize(1920,930);//Images resizer

        $path = "public/sliders".$user->id."_".time().".".$file->getClientOriginalExtension();

        \Storage::put($path, $new_image->encode());
        $slider->image = substr($path, 7);
        $slider->user_id = $user->id;
        $slider->save();
        return redirect()->back()->with('success', 'Slider Updated for Home page Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $slider = Slider::where('uuid', $uuid)->first();
        $slider->delete();
        return redirect()->back()->with('success', 'Slider Deleted for Home page');
    }
}
