<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;
use App\Model\Book;
use App\Model\Cariculam;
use App\Model\Author;
use App\Model\Publication;
use App\Model\Department;
use App\Model\Semester;
use App\Model\Student;

class BookController extends Controller
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
        $books=Book::all();
        return view('backend.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.book.create');
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
	        'code' => 'required|numeric|unique:books|max:99999',
            'name' => 'required|string|unique:books|max:200|min:4',
            'theory' => 'max:9',
            'practical' => 'max:9',
            'credit' => 'max:9',
            'tc' => 'max:99',
            'tf' => 'max:99',
            'pc' => 'max:99',
            'pf' => 'max:99',
            'total_mark' => 'max:999',
        ]);
        $book = new Book;
        $book->code = $request->code;
        $book->name = $request->name;
        $book->theory = $request->theory;
        $book->practical = $request->practical;
        $book->credit = $request->credit;
        $book->tc = $request->tc;
        $book->tf = $request->tf;
        $book->pc = $request->pc;
        $book->pf = $request->pf;
        $book->total_mark = $request->total_mark;
        $book->activation_status = $request->activation_status;
        $book->created_by = Auth::user()->id;
        $book->updated_by = Auth::user()->id;
        $saved= $book->save();
        if ($saved) {
            return redirect()->route('book.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
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
       $book=Book::find($id);
        return view('backend.book.edit',compact('book'));
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
	        'code' => 'required|numeric',
            'name' => 'required|string|max:200',
            'theory' => 'max:9',
            'practical' => 'max:9',
            'credit' => 'max:9',
            'tc' => 'max:99',
            'tf' => 'max:99',
            'pc' => 'max:99',
            'pf' => 'max:99',
            'total_mark' => 'max:999',
        ]);
        $book = Book::find($id);
        $book->code = $request->code;
        $book->name = $request->name;
        $book->theory = $request->theory;
        $book->practical = $request->practical;
        $book->credit = $request->credit;
        $book->tc = $request->tc;
        $book->tf = $request->tf;
        $book->pc = $request->pc;
        $book->pf = $request->pf;
        $book->total_mark = $request->total_mark;
        $book->activation_status = $request->activation_status;
        $book->updated_by = Auth::user()->id;
        $saved= $book->save();
        if ($saved) {
            return redirect()->route('book.index')->with('success','data updaded successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
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
        $book=Book::find($id);
        $deleted=$book->delete();
        if ($deleted) {
            return redirect()->route('book.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('book.index')->with('error','Error!!! Please Check???');
        }
    }

    public function distribution(){
        $student=Student::find(2);
        return view('backend.book.distribution',['student'=>$student]);
    }
}
