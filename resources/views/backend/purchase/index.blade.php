@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Purchases</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Purchase</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Invoices</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('purchase.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add New</button></a>
            </div>
        </div>
        <hr><hr>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        {{-- <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">SL</label>
                            </div>
                        </th> --}}
                        <th>Bill Number</th>
                        <th>Purchase Date</th>
                        <th>Subject Name</th>
                        <th>Publication</th>
                        <th>Quantity</th>
                        <th>Rate</th>
                        <th>Discount</th>
                        <th>Payable</th>
                        <th>Remarks</th>
                        <th>Created by</th>
                        <th>Approved by</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $key => $item)
                    <tr>
                        {{-- <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td> --}}
                        <td>{{$item->bill_number}}</td>
                        <td>{{date('d-M-Y', strtotime($item->purchase_date))}}</td>
                        <td>{{$item->bookName->name}}</td>
                        <td>{{$item->publicationName->publication_name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->unit_price}}</td>
                        <td>{{$item->discount .' %'}}</td>
                        <td>{{$item->payable_price}}</td>
                        <td>{{$item->remarks}}</td>
                        <td>{{$item->createdUser->name}}</td>
                        <td>
                            @if ($item->updated_by)
                                {{$item->updatedUser->name}}
                            @endif
                        </td>
                        
                        <td>
                            @if (0==$item->status)
                                <span class="badge badge-pill badge-warning">Pending</span>
                            @elseif(1==$item->status)
                                <span class="badge badge-pill badge-success">Approved</span>
                            @endif
                        </td>
                        <td style="position: sticky; right: 0">
                            @if (0==$item->status)
                                <a href="{{route('purchase.aprove',$item->id)}}" class="btn btn-success" onclick="return approve_confirm();" title="Approve"><i class="fa fa-check" aria-hidden="true"></i></i></a>
                                <a href="{{route('purchase.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Student Table Area End Here -->
@endsection
@section('script')
{{-- Code for Approved confirmation message  --}}
<script type="text/javascript">
    function approve_confirm(){
        var chk = confirm("Are you sure APPROVE this??? \nAfter approved you can't return this data!!!");
        if (chk) {
        return true;
        } else {
        return false;
        }
    }
</script>
@endsection