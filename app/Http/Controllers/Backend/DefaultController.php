<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Department;
use App\Model\Semester;
use App\Model\Purchase;

class DefaultController extends Controller
{
    public function getStudent(Request $request)
    {
        if ($request->ajax()) { 
            $output = "";
            $student = Student::where('board_roll',$request->roll)->first();
            if($student==null){
                $output.= "Roll ".$request->roll." not found!!! Please search again!!!";
                return $output;
            }
            $department=Department::where('id',$student->department_id)->first();
            $semester=Semester::where('id',$student->semester_id)->first(); 

            if ($student!=null) {
            $output .='<div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td id="name" class="font-medium text-dark-medium">'.$student->name.'</td>
                                    <td>Phone:</td>
                                    <td id="phone" class="font-medium text-dark-medium">'.$student->phone.'</td>
                                    <td id="phone" class="font-medium text-dark-medium" rowspan="4">
                                        <img src="'.asset($student->image).'" alt="student" style="height: 200px; width: 160px; border: 1px solid #000;padding: 5px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Board Roll:</td>
                                    <td id="roll" class="font-medium text-dark-medium">'.$student->board_roll.'</td>
                                    <td>Registration:</td>
                                    <td id="registration" class="font-medium text-dark-medium">'.$student->registration.'</td>
                                </tr>
                                <tr>
                                    <td>Father Name:</td>
                                    <td id="fname" class="font-medium text-dark-medium">'.$student->fname.'</td>
                                    <td>Mother name:</td>
                                    <td id="mname" class="font-medium text-dark-medium">'.$student->mname.'</td>
                                </tr>
                                <tr>
                                    <td>Department:</td>
                                    <td id="department" class="font-medium text-dark-medium">'.$department->department_name.'</td>
                                    <td>Semester:</td>
                                    <td id="semester" class="font-medium text-dark-medium">'.$semester->semester_name.'</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>';
            }
            return $output;
        }
    }

    public function getPublication(Request $request){
        $book_id = $request->book_id;
        $publications=Purchase::with(['publicationName'])->select('publication_id')->where('book_id',$book_id)->groupBy('publication_id')->get();
        return response()->json($publications);
    }
    public function getAuthor(Request $request){
        $publication_id = $request->publication_id;
        $authors=Purchase::with(['authorName'])->select('author_id')->where('publication_id',$publication_id)->groupBy('author_id')->get();
        // dd($authors->toArray());
        return response()->json($authors);
    }
}
