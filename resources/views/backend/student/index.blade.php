@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Students</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Students</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Students Data</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('student.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add Student</button></a>
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
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Roll</th>
                        <th>Department</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($item->image)
                                <img src="{{asset($item->image)}}" alt="Avatar" style="height: 35px; width: 35px; border-radius:50px;">
                            @else
                                <img src="{{asset('public/assets/backend')}}/img/figure/student2.png" alt="student">
                            @endif
                        </td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->board_roll}}</td>
                        <td>{{$item['department']['department_name']}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            @if (1==$item->activation_status)
                                <span class="badge badge-pill badge-success">Active</span>
                            @elseif(0==$item->activation_status)
                                <span class="badge badge-pill badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('student.show',$item->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="{{route('student.edit',$item->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                            <a href="{{route('student.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();"><i class="fa fa-trash" aria-hidden="true"></i></a>
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