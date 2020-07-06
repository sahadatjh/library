<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Model\Student;
use App\Model\Cariculam;
use App\Model\Department;
use App\Model\Semester;
use App\Model\Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
        return view('backend.student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=array();
        // $data['cariculams']=Cariculam::where('activation_status',1)->get();
        $data['departments']=Department::where('activation_status',1)->get();
        $data['semesters']=Semester::where('activation_status',1)->get();
        $data['sessions']=Session::where('activation_status',1)->get();
        return view('backend.student.create',$data);
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
	        'name' => 'required|string|max:200',
	        'fname' => 'required|string|max:200',
	        'mname' => 'required|string|max:200',
	        'college_roll' => 'required|numeric|unique:students',
	        'phone' => 'required|numeric',
	        'email' => 'unique:students',
	        'religion' => 'required',
	        'gender' => 'required|max:10',
	        'department_id' => 'required',
	        'semester_id' => 'required',
	        'session_id' => 'required',
	        'nationality' => 'required',
	        'address' => 'required|max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->college_roll = $request->college_roll;
        $student->board_roll = $request->board_roll;
        $student->registration = $request->registration;
        $student->phone = $request->phone;
        $student->gardian_phone = $request->gardian_phone;
        $student->gardian_profession = $request->gardian_profession;
        $student->email = $request->email;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->nationality = $request->nationality;
        $student->dob = $request->dob;
        $student->admission_date = $request->admission_date;
        $student->gender = $request->gender;
        $student->department_id = $request->department_id;
        $student->semester_id = $request->semester_id;
        $student->session_id = $request->session_id;
        $student->total_fee = $request->total_fee;
        $student->semester_fee = $request->semester_fee;
        $student->discount = $request->discount;
        $student->address = $request->address;
        $student->remarks = $request->remarks;
        $student->activation_status = $request->activation_status;
        $student->activation_status = $request->activation_status;
        $student->created_by = Auth::user()->id;
        $image=$request->file('image');
        if ($image) {
            	$image_name=Str::random(10); //hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
            	$image_full_name=$image_name.'.'.$ext;
            	$upload_path='public/assets/uploads/students/';
            	$image_url=$upload_path.$image_full_name;
            	$success=$image->move($upload_path,$image_full_name);
            	$student->image=$image_url;
            	$student->save();
                return redirect()->route('student.index')->with('success','data inserted successfully!!!');
            } else {
            	$student->save();
                return redirect()->route('student.index')->with('success','data inserted successfully!!!');
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
        $student=Student::find($id);
        return view('backend.student.show',['student'=>$student]);
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
        $data['student']=Student::find($id);
        $data['cariculams']=Cariculam::where('activation_status',1)->get();
        $data['departments']=Department::where('activation_status',1)->get();
        $data['semesters']=Semester::where('activation_status',1)->get();
        $data['sessions']=Session::where('activation_status',1)->get();
        return view('backend.student.edit',$data);
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
        $student=Student::find($id);
        $request->validate([
	        'name' => 'required|string|max:200',
	        'fname' => 'required|string|max:200',
	        'mname' => 'required|string|max:200',
	        'college_roll' => 'required|numeric',
	        'phone' => 'required|numeric',
	        'religion' => 'required',
	        'gender' => 'required|max:10',
	        'department_id' => 'required',
	        'semester_id' => 'required',
	        'session_id' => 'required',
	        'nationality' => 'required',
	        'address' => 'required|max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $student = Student::find($id);
        $student->name = $request->name;
        $student->fname = $request->fname;
        $student->mname = $request->mname;
        $student->college_roll = $request->college_roll;
        $student->board_roll = $request->board_roll;
        $student->registration = $request->registration;
        $student->phone = $request->phone;
        $student->gardian_phone = $request->gardian_phone;
        $student->gardian_profession = $request->gardian_profession;
        $student->email = $request->email;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->nationality = $request->nationality;
        $student->dob = $request->dob;
        $student->admission_date = $request->admission_date;
        $student->gender = $request->gender;
        $student->department_id = $request->department_id;
        $student->semester_id = $request->semester_id;
        $student->session_id = $request->session_id;
        $student->total_fee = $request->total_fee;
        $student->semester_fee = $request->semester_fee;
        $student->discount = $request->discount;
        $student->address = $request->address;
        $student->remarks = $request->remarks;
        $student->activation_status = $request->activation_status;
        $student->updated_by = Auth::user()->id;
        $image=$request->file('image');
        if ($image) {
            $image_name=Str::random(10);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/assets/uploads/students/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $student->image=$image_url;
            $student->save();
            if($request->oldphoto){
                unlink($request->oldphoto);
            }
            return redirect()->route('student.index')->with('success','data updated successfully!!!');
        } else {
            $student->save();
            return redirect()->route('student.index')->with('success','data updated successfully!!!');
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
        $student=Student::find($id);
        if($student->image){
            if($student->image){
                unlink($student->image);
            }
            $student->delete();
            return redirect()->route('student.index')->with('success','data deleted successfully!!!');
        } else {
            $student->delete();
            return redirect()->route('student.index')->with('success','data deleted successfully!!!');
        }
    }
}
