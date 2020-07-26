<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\BookDistribution;
use App\Model\Book;
use App\Model\Student;

class BookDistributionController extends Controller
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
        // $students=BookDistribution::orderBy('id','DESC')->get();
        $rolls=BookDistribution::select('student_roll')->groupBy('student_roll')->orderBy('id','DESC')->get();
        return view('backend.book.distribution.index',compact('rolls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=Book::where('activation_status',1)->get();
        return view('backend.book.distribution',compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->toArray());
        if ($request->roll == null) {
            return redirect()->back()->with('error', 'student roll not found!!!');
        }else {
            // dd($request);
            $count_row = count($request->book_id);
            for ($i=0; $i < $count_row; $i++) { 
                $bd = new BookDistribution();
                $bd->student_roll=$request->roll[$i];
                $bd->book_id=$request->book_id[$i];
                $bd->publication_id=$request->publication_id[$i];
                $bd->author_id=$request->author_id[$i];
                $bd->quantity=$request->quantity[$i];
                $bd->issue_date=date('Y-m-d',strtotime($request->issue_date[$i]));
                $bd->return_date=date('Y-m-d',strtotime($request->return_date[$i]));
                $bd->return_status='0';
                $bd->created_by=Auth::user()->id;
            // update book quantity
                $book=Book::where('id',$request->book_id[$i])->first();
                $book->quantity=((integer)$book->quantity)-1;
                $bd->save();
                $book->save();
            }
            return redirect()->route('distribution.index')->with('success','data inserted successfully!');
        }
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function return(Request $request, $id)
    {
        $distribution=BookDistribution::find($id);
        $distribution->return_status=1;
        $distribution->updated_by = Auth::user()->id;

        $book=Book::where('id',$distribution->book_id)->first();
        $quantity=((integer)($book->quantity))+1;
        $book->quantity=$quantity;

        if ($distribution->save()) {
            $book->save();
            return redirect()->back()->with('success','Book returned successfully!');
        }
    }

    public function details($roll){
        $student=Student::where('board_roll', $roll)->first();
        $subjects=BookDistribution::where('student_roll', $roll)->orderBy('id','DESC')->get();
        return view('backend.book.distribution.distribution-details',compact('student','subjects'));
    }
}
