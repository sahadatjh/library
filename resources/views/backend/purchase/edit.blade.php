@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Edit Invoice</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Invoice Information</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('purchase.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Invoice</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('purchase.update',$invoice->id) }}" class="new-added-form">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-4 col-12 form-group">
                            <label for="invoice_number">Ivoice Number *</label>
                            <input id="invoice_number" type="text" name="invoice_number" class="form-control @error('invoice_number') is-invalid @enderror"  value="{{$invoice->invoice_number}}" readonly >
                        </div>
                        <div class="col-lg-4 col-12 form-group">
                            <label for="book_id">Subject Name *</label>
                            <select name="book_id" id="book_id" class="select2 @error('book_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($books as $item)
                                    <option value="{{$item->id}}" {{($item->id==$invoice->book_id)?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-12 form-group">
                            <label for="publication_id">Publications Name *</label>
                            <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($publications as $item)
                                    <option value="{{$item->id}}" {{($item->id==$invoice->publication_id)?'selected':''}}>{{$item->publication_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-12 form-group">
                            <label for="author_id">Author Name *</label>
                            <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror" >
                                <option value="">Please Select*</option>
                                @foreach ($authors as $item)
                                    <option value="{{$item->id}}" {{($item->id==$invoice->author_id)?'selected':''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="quantity">Quantity *</label>
                            <input id="quantity" type="number" name="quantity" class="form-control @error('quantity') is-invalid @enderror"  value="{{ $invoice->quantity }}" >
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="priented_price">Price(Priented)</label>
                            <input id="priented_price" type="number" name="priented_price" class="form-control @error('priented_price') is-invalid @enderror"  value="{{ $invoice->priented_price }}" >
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="discount">Discount %</label>
                            <input id="discount" type="number" name="discount" class="form-control @error('discount') is-invalid @enderror"  value="{{ $invoice->discount}}"> 
                        </div>
                        <div class="col-lg-2 col-12 form-group">
                            <label for="toral_price">Total Price</label>
                            <input id="toral_price" type="number" name="total_payable" class="form-control @error('toral_price') is-invalid @enderror"  value="{{ $invoice->total_payable }}" > 
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="remarks">Remarks *</label>
                            <textarea id="remarks" name="remarks" class="textarea form-control @error('remarks') is-invalid @enderror" cols="10" rows="4">{{$invoice->remarks}}</textarea>
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection