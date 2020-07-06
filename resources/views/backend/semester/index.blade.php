@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Semesters</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Semester</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Semesters</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('semester.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add New</button></a>
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
                                <label class="form-check-label">Sl No</label>
                            </div>
                        </th>
                        <th>Semester Name</th>
                        <th>Code</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semesters as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td>{{$item->semester_name}}</td>
                        <td>{{$item->semester_code}}</td>
                        <td>
                            @if (1==$item->activation_status)
                                <span class="badge badge-pill badge-success">Active</span>
                            @elseif(0==$item->activation_status)
                                <span class="badge badge-pill badge-warning">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('semester.edit',$item->id)}}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('semester.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();"title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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