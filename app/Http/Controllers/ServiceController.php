<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Service;
use Ramsey\Uuid\Uuid;

class ServiceController extends Controller
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
        return view('/dashboard/school/school_admin/services/index');
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
        $service = Service::where('user_id', $user->id)->get();
        if(count($service) == 9){
            return redirect()->back()->with('success', 'You have reach the maximum number of the Services!. Thanks');
        }
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'icon' => 'required|string'
        ]);

        $service = new Service;
        $service->uuid = Uuid::uuid4();
        $service->user_id = $user->id;
        $service->title = $request->title;
        $service->content = $request->content;
        $service->icon = $request->icon;
        $service->save();

        return redirect('/dashboard/school/school_admin/services/index')->with('success', 'Service created successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $services = Service::where('uuid', $uuid)->first();
        return redirect('/dashboard/school/school_admin/services/index', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $service = Service::where('uuid', $uuid)->first();
        return redirect('/dashboard/school/school_admin/services/index', compact('service'));
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
            'icon' => 'required|string'
        ]);

        if($request->uuid){
            $service = Service::where('uuid', $request->uuid)->first();
            if(!$service){
                return redirect()->back()->with('error', 'Service not found!');
            }
        }else{
            $service->title = $request->title;
            $service->content = $request->content;
            $service->icon = $request->icon;
            $service->user_id = $user->id;
            $service->save();

            return redirect('/dashboard/school/school_admin/services/index')->with('success', 'Service Updated Successfull');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        $service = Service::where('uuid', $uuid)->first();
        $service->delete();
        return redirect('/dashboard/school/school_admin/services/index')->with('success', 'Service deleted successfull');
    }
}
