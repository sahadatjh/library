@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Users</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Users Data</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('user.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add User</button></a>
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
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Level</th>
                        <th>Address</th>
                        <th>Activation Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $item)
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
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->usertype}}</td>
                        <td>{{$item->address}}</td>
                        <td>
                            @if (1==$item->activation_status)
                                <span class="badge badge-pill badge-success">Active</span>
                            @elseif(0==$item->activation_status)
                                <span class="badge badge-pill badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('user.show',$item->id)}}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="{{route('user.edit',$item->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                            <a href="{{route('user.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();"><i class="fa fa-trash" aria-hidden="true"></i></a>
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