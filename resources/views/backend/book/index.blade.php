@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Books</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Books</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Books Data</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('book.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add Book</button></a>
            </div>
        </div>
        <hr><hr>
        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">SL</label>
                            </div>
                        </th>
                        <th>code</th>
                        <th>Subject Name</th>
                        <th>Theory</th>
                        <th>Parctical</th>
                        <th>Credit</th>
                        <th>TC</th>
                        <th>TF</th>
                        <th>PC</th>
                        <th>PF</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->theory}}</td>
                        <td>{{$item->practical}}</td>
                        <td>{{$item->credit}}</td>
                        <td>{{$item->tc}}</td>
                        <td>{{$item->tf}}</td>
                        <td>{{$item->pc}}</td>
                        <td>{{$item->pf}}</td>
                        <td>
                            @if (1==$item->activation_status)
                                <span class="badge badge-pill badge-success">Active</span>
                            @elseif(0==$item->activation_status)
                                <span class="badge badge-pill badge-warning">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('book.edit',$item->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                            <a href="{{route('book.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();"title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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