@extends('backend.master')
@section('content')<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Book Issue</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Details Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Student Details</h3>
            </div>
            <div class="pull-right">
                <div class="form-group">
                    <input type="text" class="form-control" id="roll" name="roll" placeholder="Search By Roll" maxlength="6">
                </div>
            </div>
        </div>
        <hr>
        <div class="single-info-details" id="stdInfo">
            {{-- Student details are here --}}
            <h2>Please search any student...</h2>
        </div>
    </div>
</div>
<!-- Book Issue Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Issue new book</h3>
            </div>
        </div>
        <hr><hr>
        <div class="row new-added-form">
            <div class="col-lg-3 col-12 form-group">
                <label for="book_id">Subject Name *</label>
                <select name="book_id" id="book_id" class="select2 @error('book_id') is-invalid @enderror" >
                    <option value="">Please Select *</option>
                    @foreach ($books as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 col-12 form-group">
                <label for="publication_id">Publications *</label>
                <select name="publication_id" id="publication_id" class="select2 @error('publication_id') is-invalid @enderror" >
                    <option value="">Select Publication *</option>
                </select>
            </div>
            <div class="col-lg-3 col-12 form-group">
                <label for="author_id">Author Name *</label>
                <select name="author_id" id="author_id" class="select2 @error('author_id') is-invalid @enderror" >
                    <option value="">Select Author *</option>
                </select>
            </div>
            <div class="col-3 form-group mg-t-8">
                <button class="btn-fill-lg bg-blue-dark btn-hover-yellow btnAdd" id="btnAdd" style="margin-top: 30px">Add Item</button>
            </div>
        </div>
        <hr><hr><br>
        <div class="table-responsive">
            <form method="POST" action="{{ route('distribution.store') }}" class="new-added-form">
            @csrf
                <table class="table display text-nowrap">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th width="10%">Quantity</th>
                            <th>Issue Date</th>
                            <th>Return Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="addRow" class="addRow">
                        
                    </tbody>
                </table>
                <div class="col-12 form-group mg-t-8">
                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" id="btnStore">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Book Issue Area End Here -->

@endsection
@section('script')
{{-- ajax script for student search --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('#roll').on('keyup', function(){
                var roll = $(this).val();
                if (roll.length==6) {
                    $.ajax({
                        url:"{{route('getstudent')}}",
                        type:'GET',
                        data:{'roll':roll},
                        success:function(data){
                            $('#stdInfo').html(data);
                        }
                    });
                }
                //end of ajax call
            });
        });
    </script>
{{-- Script for change subject select publication option  --}}
    <script type="text/javascript">
        $(function () {
            $(document).on('change','#book_id',function () {
                var book_id =$(this).val();
                $.ajax({
                    url:"{{route('getpublication')}}",
                    type:'GET',
                    data:{'book_id':book_id},
                    success:function(data){
                        var html = '<option value="">Select Publication *</option>';
                        $.each(data,function(key,v){
                            html+='<option value="'+v.publication_id+'">'+v.publication_name.publication_name+'</option>';
                        });
                        $('#publication_id').html(html);
                    }
                });
            });
        });
    </script>
{{-- Script for change publication select author option  --}}
    <script type="text/javascript">
        $(function () {
            $(document).on('change','#publication_id',function () {
                var publication_id =$(this).val();
                $.ajax({
                    url:"{{route('get.author')}}",
                    type:'GET',
                    data:{'publication_id':publication_id},
                    success:function(data){
                        var html = '<option value="">Select Autor *</option>';
                        $.each(data,function(key,v){
                            html+='<option value="'+v.author_id+'">'+v.author_name.name+'</option>';
                        });
                        $('#author_id').html(html);
                    }
                });
            });
        });
    </script>
{{-- Script for add item button  --}}
    <script id="itemInfo" type="text/x-handlebars-template">
        <tr class="delete_row" id="delete_row">
            <td>
                <input type="hidden" name="roll[]" value="@{{roll}}">
                <input type="hidden" name="publication_id[]" value="@{{publication_id}}">
                <input type="hidden" name="author_id[]" value="@{{author_id}}">
                <input type="hidden" name="book_id[]" value="@{{book_id}}">@{{book_name}}
            </td>
            <td><div class="form-group"><input type="number" class="form-control quantity" name="quantity[]" value="1" min="1" size="2"></div></td>
            <td><div class="form-group"><input type="date" name="issue_date[]" id="issue_date" class="form-control " ></div></td>
            <td><div class="form-group"><input type="date" name="return_date[]" id="return_date" class="form-control " ></div></td>
            <td><i class="btn btn-danger btn-lg fa fa-window-close btnRemove"></i></td>
        </tr>
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("click",".btnAdd",function(){
                var roll = $('#roll').val();
                var book_id = $('#book_id').val();
                var book_name = $('#book_id').find('option:selected').text();
                var publication_id = $('#publication_id').val();
                var author_id = $('#author_id').val();
                if (roll=='') {
                    toastr.error("Search student first!!!");
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

                var source = $("#itemInfo").html();
                var itemData = Handlebars.compile(source);
                var data = {
                    roll:roll,
                    book_id:book_id,
                    book_name:book_name,
                    publication_id:publication_id,
                    author_id:author_id,
                }
                var html = itemData(data);
                $("#addRow").append(html);
            });
            // romeve button
            $(document).on("click", ".btnRemove", function(){
                $(this).closest(".delete_row").remove();
            });
        });

        $(document).ready(function(){
            $(document).on("click","#btnStore",function(){
                
                var issue_date = $('#issue_date').val();
                var return_date = $('#return_date').val();

                if (issue_date=='') {
                    toastr.error("Issue Date is required!!!");
                    return false;
                }
                if (return_date=='') {
                    toastr.error("return Date is required!!!");
                    return false;
                }
            });
        });
    </script>
@endsection