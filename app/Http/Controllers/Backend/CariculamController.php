<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Cariculam;

class CariculamController extends Controller
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
        $cariculam=Cariculam::all();
        return view('backend.cariculam.index',['cariculams'=>$cariculam]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cariculam.create');
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
	        'name' => 'required|string|unique:cariculams|max:200|min:4',
	        'coments' => 'max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $cariculam = new Cariculam;
        $cariculam->name = $request->name;
        $cariculam->coments = $request->coments;
        $cariculam->activation_status = $request->activation_status;
        $cariculam->created_by = Auth::user()->id;
        $saved= $cariculam->save();
        if ($saved) {
            return redirect()->route('cariculam.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('cariculam.index')->with('error','Error!!! Please Check???');
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
        $cariculam=Cariculam::find($id);
        return view('backend.cariculam.edit',['cariculam'=>$cariculam]);
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
	        'coments' => 'max:250',
	        'activation_status' => 'required|numeric',
        ]);

        $cariculam=Cariculam::find($id);
        $cariculam->name = $request->name;
        $cariculam->coments = $request->coments;
        $cariculam->activation_status = $request->activation_status;
        $update= $cariculam->save();
        if ($update) {
            return redirect()->route('cariculam.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('cariculam.index')->with('error','Error!!! Please Check???');
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
        $cariculam=Cariculam::find($id);
        $deleted=$cariculam->delete();
        if ($deleted) {
            return redirect()->route('cariculam.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('cariculam.index')->with('error','Error!!! Please Check???');
        }
    }
}
