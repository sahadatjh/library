<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Author;

class AuthorController extends Controller
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
        $author=Author::all();
        return view('backend.author.index',['authors'=>$author]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.author.create');
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
	        'name' => 'required|string|unique:authors|max:200|min:4',
	        'coments' => 'string|max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $author = new Author;
        $author->name = $request->name;
        $author->coments = $request->coments;
        $author->activation_status = $request->activation_status;
        $author->created_by = Auth::user()->id;
        $saved= $author->save();
        if ($saved) {
            return redirect()->route('author.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('author.index')->with('error','Error!!! Please Check???');
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
        $author=Author::find($id);
        return view('backend.author.edit',['author'=>$author]);
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
	        'name' => 'required|string|max:200|min:4',
	        'coments' => 'string|max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $author=Author::find($id);
        $author->name = $request->name;
        $author->coments = $request->coments;
        $author->activation_status = $request->activation_status;
        $update= $author->save();
        if ($update) {
            return redirect()->route('author.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('author.index')->with('error','Error!!! Please Check???');
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
        $author=Author::find($id);
        $deleted=$author->delete();
        if ($deleted) {
            return redirect()->route('author.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('author.index')->with('error','Error!!! Please Check???');
        }
    }
}
