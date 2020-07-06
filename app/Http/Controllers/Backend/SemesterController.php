<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Semester;

class SemesterController extends Controller
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
        $semester=Semester::all();
        return view('backend.semester.index',['semesters'=>$semester]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.semester.create');
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
	        'semester_name' => 'required|string|unique:semesters|max:20',
	        'semester_code' => 'required|numeric|unique:semesters',
	        'activation_status' => 'required|numeric',
        ]);

       
        $semester = new Semester;
        $semester->semester_name = $request->semester_name;
        $semester->semester_code = $request->semester_code;
        $semester->activation_status = $request->activation_status;
        $semester->created_by = Auth::user()->id;
        $saved= $semester->save();
        if ($saved) {
            return redirect()->route('semester.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('semester.index')->with('error','Error!!! Please Check???');
        }
    }
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
        $semester=Semester::find($id);
        return view('backend.semester.edit',['semester'=>$semester]);
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
        $request->validate([
	        'semester_name' => 'required|string|max:20',
	        'semester_code' => 'required|numeric',
	        'activation_status' => 'required|numeric',
        ]);

        $semester=Semester::find($id);
        $semester->semester_name = $request->semester_name;
        $semester->semester_code = $request->semester_code;
        $semester->activation_status = $request->activation_status;
        $saved= $semester->save();
        if ($saved) {
            return redirect()->route('semester.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('semester.index')->with('error','Error!!! Please Check???');
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
        $semester=Semester::find($id);
        $deleted=$semester->delete();
        if ($deleted) {
            return redirect()->route('semester.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('semester.index')->with('error','Error!!! Please Check???');
        }
    }
}
