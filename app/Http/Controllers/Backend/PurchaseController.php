<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Model\Purchase;
use App\Model\Publication;
use App\Model\Book;
use App\Model\Author;

class PurchaseController extends Controller
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
        $purchases=Purchase::orderBy('id','DESC')->get();
        return view('backend.purchase.index',compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books=Book::where('activation_status',1)->get();
        $publications=Publication::where('activation_status',1)->get();
        $authors=Author::where('activation_status',1)->get();
        return view('backend.purchase.create',compact('books','publications','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->book_id == null) {
            return redirect()->back()->with('error', 'you are not selected any item!!!');
        }elseif( $request->unit_price[0] == null){
            return redirect()->back()->with('error', 'Unite Price Field is required!!!');
        }else {
            // dd($request);
            $count_row = count($request->book_id);
            for ($i=0; $i < $count_row; $i++) { 
                $purchase = new Purchase();
                $purchase->purchase_date=date('Y-m-d',strtotime($request->purchase_date[$i]));
                $purchase->bill_number=$request->bill_number[$i];
                $purchase->book_id=$request->book_id[$i];
                $purchase->publication_id=$request->publication_id[$i];
                $purchase->author_id=$request->author_id[$i];
                $purchase->quantity=$request->quantity[$i];
                $purchase->unit_price=$request->unit_price[$i];
                $purchase->discount=$request->discount[$i];
                $purchase->payable_price=$request->total_price[$i];
                $purchase->remarks=$request->remarks[$i];
                $purchase->status='0';
                $purchase->created_by=Auth::user()->id;
                // $purchase->updated_by=Auth::user()->id;
                $saved= $purchase->save();
            }
            if ($saved) {
                return redirect()->route('purchase.index')->with('success','data inserted successfully!');
            } else {
                return redirect()->route('purchase.create')->with('error','Error!!! Please Check???');
            }
        }
        
    }

    /**
     * Approved the purchase entry specified resource.
     * update book quantity Book table
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function aprove($id)
    {
        $purchase=Purchase::find($id);
        $book=Book::where('id',$purchase->book_id)->first();
        $purchase_qantity=((float)($purchase->quantity))+((float)($book->quantity));
        $book->quantity=$purchase_qantity;
        if ($book->save()) {
            $purchase->status=1;
            $purchase->updated_by=Auth::user()->id;
            $purchase->save();
            return redirect()->back()->with('success','purchase approved successfully!');
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
        $purchase=Purchase::find($id);
        if (1==$purchase->status) {
            return redirect()->route('purchase.index')->with('error','Already Approved! can\'t delete it!');
        } else {
            $purchase->delete();
            return redirect()->route('purchase.index')->with('success','data deleted successfully!');
        }
    }
}
