@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Publications</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>All Publication</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>All Publications</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('publication.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Add New</button></a>
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
                        <th>Logo</th>
                        <th>Publication Name</th>
                        <th>Representative</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publications as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td class="text-center">
                            @if ($item->logo)
                                <img src="{{asset($item->logo)}}" alt="Avatar" style="height: 35px; width: 35px; border-radius:50px;">
                            @else
                               -----
                            @endif
                        </td>
                        <td>{{$item->publication_name}}</td>
                        <td>{{$item->representative}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            @if (1==$item->activation_status)
                                <span class="badge badge-pill badge-success">Active</span>
                            @elseif(0==$item->activation_status)
                                <span class="badge badge-pill badge-warning">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('publication.edit',$item->id)}}" class="btn btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="{{route('publication.destroy',$item->id)}}" id="delete"class="btn btn-danger" onclick="return check_delete();"title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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