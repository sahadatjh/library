@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Purchase</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Purchase Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Purchase</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('purchase.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Purchase</button></a>
                    </div>
                </div>
                <hr><hr>
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
                <div class="row new-added-form">
                    <div class="col-lg-3 col-12 form-group">
                        <label for="bill_number">Bill Number *</label>
                        {{-- @php  $bill_number=Str::random(7); @endphp --}}
                        <input id="bill_number" type="text" name="bill_number" placeholder="Bill Number" class="form-control @error('bill_number') is-invalid @enderror"  value="{{ old('bill_number')}}"  >
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label for="purchase_date">Purchase Date *</label>
                        <input type="text" name="purchase_date" id="purchase_date" placeholder="yyy-mm-dd" class="form-control air-datepicker @error('purchase_date') is-invalid @enderror " data-position='bottom right'>
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <label for="book_id">Subject Name *</label>
                        <select name="book_id" id="book_id" class="select2 @error('book_id') is-invalid @enderror" >
                            <option value="">Please Select*</option>
                            @foreach ($books as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <label for="publication_id">Publications *</label>
                        <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror" >
                            <option value="">Please Select*</option>
                            @foreach ($publications as $item)
                                <option value="{{$item->id}}">{{$item->publication_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-3 col-12 form-group">
                        <label for="author_id">Author Name *</label>
                        <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror" >
                            <option value="">Please Select*</option>
                            @foreach ($authors as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-3 form-group mg-t-8">
                        <button class="btn-fill-lg bg-blue-dark btn-hover-yellow btnAdd" id="btnAdd" style="margin-top: 30px">Add Item</button>
                    </div>
                </div>
                <hr><hr><br>
                <div class="table-responsive">
                    <form method="POST" action="{{ route('purchase.store') }}" class="new-added-form">
                    @csrf
                        <table class="table display text-nowrap">
                            <thead>
                                <tr>
                                    <th>Subject Name</th>
                                    <th width="10%">Quantity</th>
                                    <th width="12%">Unit Price</th>
                                    <th width="8%">Discount</th>
                                    <th>Remarks</th>
                                    <th width="15%">Payable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="addRow" class="addRow">
                                
                            </tbody>
                            <tbody>
                                <td colspan="5"></td>
                                <td><div class="form-group"><input type="text" name="total_payable_amount" id="total_payable_amount" class="form-control total_payable_amount" value="0" readonly  style="background-color: #D8FDBA; " ></div></td>
                            </tbody>
                        </table>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" id="btnStore">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{-- Script Section --}}
@section('script')
    <script id="document-template" type="text/x-handlebars-template">
        <tr class="delete_row" id="delete_row">
            <td>
                <input type="hidden" name="purchase_date[]" value="@{{purchase_date}}">
                <input type="hidden" name="bill_number[]" value="@{{bill_number}}">
                <input type="hidden" name="publication_id[]" value="@{{publication_id}}">
                <input type="hidden" name="author_id[]" value="@{{author_id}}">
                <input type="hidden" name="book_id[]" value="@{{book_id}}">@{{book_name}}
            </td>
            <td><div class="form-group"><input type="number" class="form-control quantity" name="quantity[]" value="1" min="1" size="2"></div></td>
            <td><div class="form-group"><input type="number" class="form-control unit_price" name="unit_price[]" id="unit_price"></div></td>
            <td><div class="form-group"><input type="number" class="form-control discount" name="discount[]"></div></td>
            <td><div class="form-group"><input type="text" class="form-control " name="remarks[]"></div></td>
            <td><div class="form-group"><input type="number" class="form-control total_price" name="total_price[]" value="0" readonly></div></td>
            <td><i class="btn btn-danger btn-lg fa fa-window-close removeBtn"></i></td>
        </tr>
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("click",".btnAdd",function(){
                var purchase_date = $('#purchase_date').val();
                var bill_number = $('#bill_number').val();
                var book_id = $('#book_id').val();
                var book_name = $('#book_id').find('option:selected').text();
                var publication_id = $('#publication_id').val();
                var author_id = $('#author_id').val();

                if (bill_number=='') {
                    toastr.error("Bill Number is required!!!");
                    return false;
                }
                if (purchase_date=='') {
                    toastr.error("Date is required!!!");
                    return false;
                }
                if (book_id=='') {
                    toastr.error("Please Select Subject!!!");
                    return false;
                }
                if (publication_id=='') {
                    toastr.error("Please select Publication!");
                    return false;
                }
                if (author_id=='') {
                    toastr.error("Please select Author!!!");
                    return false;
                }

                var source = $("#document-template").html();
                var template = Handlebars.compile(source);
                var data = {
                    purchase_date:purchase_date,
                    bill_number:bill_number,
                    book_id:book_id,
                    book_name:book_name,
                    publication_id:publication_id,
                    author_id:author_id,

                }
                var html = template(data);
                $("#addRow").append(html);
            });
            // romeve button
            $(document).on("click", ".removeBtn", function(){
                $(this).closest(".delete_row").remove();
                totalPayable();
            });
            // auto calculation sub total
            $(document).on('keyup click', '.unit_price, .quantity, .discount', function(){
                var unit_price = $(this).closest('tr').find('input.unit_price').val();
                var quantity = $(this).closest('tr').find('input.quantity').val();
                var discount = $(this).closest('tr').find('input.discount').val();
                var payable =(unit_price*quantity)-(unit_price*quantity*discount)/100;
                $(this).closest('tr').find('input.total_price').val(payable);
                totalPayable();
            });
            //total payable amount calculation in this bill
            function totalPayable(){
                var sum=0;
                $('.total_price').each(function(){
                    var value = $(this).val();
                    if (!isNaN(value) && value.length !=0) {
                        sum+=parseFloat(value);
                    }
                });
                $('.total_payable_amount').val(sum);
            }
        });

        $(document).ready(function(){
            $(document).on("click","#btnStore",function(){
                
                var unit_price = $('#unit_price').val();

                if (unit_price=='') {
                    toastr.error("Unite Price required!!!");
                    return false;
                }
            });
        });
    </script>
@endsection
