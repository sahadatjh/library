<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Session;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $session=Session::all();
        return view('backend.session.index',['sessions'=>$session]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.session.create');
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
	        'session_name' => 'max:9|min:9|unique:sessions',
	        'session_code' => 'max:7|min:7|unique:sessions',
	        'session_short_code' => 'max:5|min:5|unique:sessions',
	        'activation_status' => 'required|numeric',
        ]);

        $session = new Session;
        $session->session_name = $request->session_name;
        $session->session_code = $request->session_code;
        $session->session_short_code = $request->session_short_code;
        $session->activation_status = $request->activation_status;
        $session->created_by = Auth::user()->id;
        $saved= $session->save();
        if ($saved) {
            return redirect()->route('session.index')->with('success','data inserted successfully!');
        } else {
            return redirect()->route('session.index')->with('error','Error!!! Please Check???');
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
        $session=Session::find($id);
        return view('backend.session.edit',['session'=>$session]);
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
	        'session_name' => 'max:9|min:9',
	        'session_code' => 'max:7|min:7',
	        'session_short_code' => 'max:5|min:5',
	        'activation_status' => 'required|numeric',
        ]);

        $session=Session::find($id);
        $session->session_name = $request->session_name;
        $session->session_code = $request->session_code;
        $session->session_short_code = $request->session_short_code;
        $session->activation_status = $request->activation_status;
        $update= $session->save();
        if ($update) {
            return redirect()->route('session.index')->with('success','data updated successfully!');
        } else {
            return redirect()->route('session.index')->with('error','Error!!! Please Check???');
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
        $session=Session::find($id);
        $deleted=$session->delete();
        if ($deleted) {
            return redirect()->route('session.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('department.index')->with('error','Error!!! Please Check???');
        }
    }
}
