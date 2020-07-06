<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Publication;

class publicationController extends Controller
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
        $publication=Publication::all();
        return view('backend.publication.index',['publications'=>$publication]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
	        'publication_name' => 'required|string|unique:publications|max:250|min:4',
	        'representative' => 'max:250',
	        'phone' => 'unique:publications|numeric',
	        'email' => 'max:100|email|unique:publications',
	        'activation_status' => 'required|numeric',
        ]);

        $publication = new Publication;
        $publication->publication_name = $request->publication_name;
        $publication->representative = $request->representative;
        $publication->phone = $request->phone;
        $publication->email = $request->email;
        $publication->activation_status = $request->activation_status;
        $publication->created_by = Auth::user()->id;
        $logo=$request->file('logo');
        if ($logo) {
            	$logo_name=hexdec(uniqid());
                $ext=strtolower($logo->getClientOriginalExtension());
                // echo $ext;
            	$logo_full_name=$logo_name.'.'.$ext;
            	$upload_path='public/assets/uploads/';
            	$logo_url=$upload_path.$logo_full_name;
            	$success=$logo->move($upload_path,$logo_full_name);
            	$publication->logo=$logo_url;
            	$publication->save();
                return redirect()->route('publication.index')->with('success','data inserted successfully!!!');
            } else {
            	$publication->save();
                return redirect()->route('publication.index')->with('success','data inserted successfully!!!');
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
        $publication=Publication::find($id);
        return view('backend.publication.edit',['publication'=>$publication]);
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
	        'publication_name' => 'required|string|max:250|min:4',
	        'representative' => 'max:250',
	        'phone' => 'numeric',
	        'email' => 'max:100|email',
	        'activation_status' => 'required|numeric',
        ]);
        $publication = Publication::find($id);
        $publication->publication_name = $request->publication_name;
        $publication->representative = $request->representative;
        $publication->phone = $request->phone;
        $publication->email = $request->email;
        $publication->activation_status = $request->activation_status;
        $logo=$request->file('logo');
        if ($logo) {
            $logo_name=hexdec(uniqid());
            $ext=strtolower($logo->getClientOriginalExtension());
            // echo $ext;
            $logo_full_name=$logo_name.'.'.$ext;
            $upload_path='public/assets/uploads/';
            $logo_url=$upload_path.$logo_full_name;
            $success=$logo->move($upload_path,$logo_full_name);
            $publication->logo=$logo_url;
            $publication->save();
            if($request->oldphoto){
                unlink($request->oldphoto);
            }
            return redirect()->route('publication.index')->with('success','data udated successfully!!!');
        } else {
            $publication->save();
            return redirect()->route('publication.index')->with('success','data udated successfully!!!');
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
        $publication=Publication::find($id);
        if ($publication->logo) {
            if($publication->logo){
                unlink($publication->logo);
            }
            $publication->delete();
            return redirect()->route('publication.index')->with('success','data deleted successfully!');
        } else {
            return redirect()->route('publication.index')->with('success','data deleted successfully!');
        }
    }
}
