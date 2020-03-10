<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use Ramsey\Uuid\Uuid;

class StudentController extends Controller
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
        return view('/dashboard/school/school_admin/students/index');
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
        $student = Student::where('user_id', $user->id)->get();
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'required|string'
        ]);

        $student = new Student;
        $student->uuid = Uuid::uuid4();
        $student->name = $request->name;

        $file   = $request->file('image');
        $image = Image::make($file);
        $new_image = $image->resize(520,640);//Images resizer

        $path = "public/grads".$user->id."_".time().".".$file->getClientOriginalExtension();

        \Storage::put($path, $new_image->encode());
        $student->image = substr($path, 7);
        $student->user_id = $user->uuid;
        $student->save();
        return redirect()->back()->with('success', 'Best Students of the class created Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $students = Student::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/sudents/show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $student = Student::where('uuid', $uuid)->first();
        return view('/dashboard/school/school_admin/sudents/show', compact('student'));
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
        $user = Auth::user();
        $this->validate($request, [
            'name' => 'required|string',
            'image' => 'required|string'
        ]);

        if($request->uuid){
            $student = Student::where('uuid', $request->uuid)->first();
            if(!$student){
                return redirect()->back()->with('error', 'Best Grad Student not found');
            }
        }
        $student->name = $request->name;

        $file   = $request->file('image');
        $image = Image::make($file);
        $new_image = $image->resize(520,640);//Images resizer

        $path = "public/grads".$user->id."_".time().".".$file->getClientOriginalExtension();

        \Storage::put($path, $new_image->encode());
        $student->image = substr($path, 7);
        $student->user_id = $user->uuid;
        $student->save();
        return redirect()->back()->with('success', 'Best Students of the class Updated Successfull');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $student = Student::where('uuid', $uuid)->first();
        $student->delete();
        return view('/dashboard/school/school_admin/student/index')->with('success', 'Best Grad Student Deleted Successfully');
    }
}
