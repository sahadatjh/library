<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Department;
use App\Model\Cariculam;

class DepartmentController extends Controller
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
        $departments=Department::all();
        return view('backend.department.index',['departments'=>$departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cariculam=Cariculam::where('activation_status',1)->get();
        return view('backend.department.create',['cariculams'=>$cariculam]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
	        'cariculam_id' => 'required|numeric',
	        'department_name' => 'required|string|unique:departments|max:200|min:4',
	        'department_code' => 'required|numeric|unique:departments',
	        'activation_status' => 'required|numeric',
        ]);

        $department = new Department;
        $department->cariculam_id = $request->cariculam_id;
        $department->department_name = $request->department_name;
        $department->department_code = $request->department_code;
        $department->activation_status = $request->activation_status;
        $department->created_by = Auth::user()->id;
        $saved= $department->save();
        if ($saved) {
            return redirect()->route('department.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('department.index')->with('error','Error!!! Please Check???');
        }
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
        $data=array();
        $data['cariculams']=Cariculam::where('activation_status',1)->get();
        $data['department']=Department::find($id);
        return view('backend.department.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
	        'cariculam_id' => 'required|numeric',
	        'department_name' => 'required|string|max:200|min:3',
	        'department_code' => 'required|numeric',
	        'activation_status' => 'required|numeric',
        ]);

        $department=Department::find($id);
        $department->cariculam_id = $request->cariculam_id;
        $department->department_name = $request->department_name;
        $department->department_code = $request->department_code;
        $department->activation_status = $request->activation_status;
        $update= $department->save();
        if ($update) {
            return redirect()->route('department.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('department.index')->with('error','Error!!! Please Check???');
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
        $department=Department::find($id);
        $deleted=$department->delete();
        if ($deleted) {
            return redirect()->route('department.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('department.index')->with('error','Error!!! Please Check???');
        }
    }
}
