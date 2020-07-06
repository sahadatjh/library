<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;

class UserController extends Controller
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
        $users= User::all();
        return view('backend.user.list',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.user.create');
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
	        'name' => 'required|string|max:200|min:4',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
	        'phone' => 'required|max:13|min:11',
	        'usertype' => 'required',
	        'designation' => 'required',
	        'gender' => 'required',
	        'nid' => 'required|max:17|min:10',
	        'joining_date' => 'required',
	        'religion' => 'required',
	        'address' => 'required|max:250',
	        'activation_status' => 'required',
	        'password' => ['required', 'string', 'min:4', 'confirmed'],
	        'image' => 'mimes:jpeg,jpg,png,gif|max:1000',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nid = $request->nid;
        $user->usertype = $request->usertype;
        $user->gender = $request->gender;
        $user->designation_id = $request->designation;
        $user->religion = $request->religion;
        $user->joining_date = $request->joining_date;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->activation_status = $request->activation_status;
        $user->created_by = Auth::user()->id;
        $image=$request->file('image');
        if ($image) {
            	$image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
                // echo $ext;
            	$image_full_name=$image_name.'.'.$ext;
            	$upload_path='public/assets/uploads/';
            	$image_url=$upload_path.$image_full_name;
            	$success=$image->move($upload_path,$image_full_name);
            	$user->image=$image_url;
            	$user->save();
                return redirect()->route('user.index')->with('success','data inserted successfully!!!');
            } else {
            	$user->save();
                return redirect()->route('user.index')->with('success','data inserted successfully!!!');
            }
        // $data=array();
		// $data['name']=$request->name;
		// $data['email']=$request->email;
		// $data['phone']=$request->phone;
		// $data['nid']=$request->nid;
		// $data['usertype']=$request->usertype;
		// $data['gender']=$request->gender;
		// $data['designation_id']=$request->designation;
		// $data['religion']=$request->religion;
		// $data['joining_date']=$request->joining_date;
		// $data['dob']=$request->dob;
		// $data['address']=$request->address;
		// $data['password']= Hash::make($request->password);
		// $data['activation_status']=$request->activation_status;
		// $data['created_by']=Auth::user()->id;
		// $image=$request->file('image');
    	// if ($image) {
    	// 	$image_name=hexdec(uniqid());
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     // echo $ext;
    	// 	$image_full_name=$image_name.'.'.$ext;
    	// 	$upload_path='public/assets/uploads/';
    	// 	$image_url=$upload_path.$image_full_name;
    	// 	$success=$image->move($upload_path,$image_full_name);
		// 	$data['image']=$image_url;
        //     // echo "<pre>";
        //     // print_r($data);
    	// 	DB::table('users')->insert($data);
        //     return redirect()->route('user.index')->with('success','data inserted successfully!!!');
    	// } else {
    	// 	DB::table('users')->insert($data);
        //     return redirect()->route('user.index')->with('success','data inserted successfully!!!');
    	// }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('backend.user.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('backend.user.edit',['user'=>$user]);
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
            'email' => ['required', 'string', 'email', 'max:255'],
	        'phone' => 'required|max:13|min:11',
	        'usertype' => 'required',
	        'designation' => 'required',
	        'gender' => 'required',
	        'nid' => 'required|max:17|min:10',
	        'joining_date' => 'required',
	        'religion' => 'required',
	        'address' => 'required|max:250',
	        'activation_status' => 'required',
	        'image' => 'mimes:jpeg,jpg,png,gif|max:1000',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->nid = $request->nid;
        $user->usertype = $request->usertype;
        $user->gender = $request->gender;
        $user->designation_id = $request->designation;
        $user->religion = $request->religion;
        $user->joining_date = $request->joining_date;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->activation_status = $request->activation_status;
        $image=$request->file('image');
        if ($image) {
            	$image_name=hexdec(uniqid());
                $ext=strtolower($image->getClientOriginalExtension());
            	$image_full_name=$image_name.'.'.$ext;
            	$upload_path='public/assets/uploads/';
            	$image_url=$upload_path.$image_full_name;
            	$success=$image->move($upload_path,$image_full_name);
            	$user->image=$image_url;
                $user->save();
                if($request->oldphoto){
                    unlink($request->oldphoto);
                }
                return redirect()->route('user.index')->with('success','User Updated successfully!');
            } else {
            	$user->save();
                return redirect()->route('user.index')->with('success','user Updated successfully!!!');
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
        $user=User::find($id);
        // $select_user=DB::table('users')->where('id',$id)->first();
		if($user->image){
			unlink($user->image);
        }
        $user->delete();
		// $deleted=DB::table('users')->where('id',$id)->delete();

		return redirect()->route('user.index')->with('success','data deleted successfully!!!');
    }


    public function password(){
        return view('backend.user.password');
    }
    public function passwordUpdate(Request $request){
        $request->validate([
            // 'current_password' => ['required'],
	        'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
        $id=Auth::user()->id;
        $user=User::find($id);
        // $stored_password=$user->password;
        // $given_password = Hash::make($request->current_password);
        // dd($stored_password,$given_password);
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->route('user.index')->with('success','password changed successfully!!!');
        
    }
}
