@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>User Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card account-settings-box">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>User Details</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('user.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All User</button></a>
                    </div>
                </div>
                <hr><hr>
                <div class="user-details-box">
                    <div class="">
                        @if ($user->image)
                            <img src="{{asset($user->image)}}" alt="user" style="height: 200px;border: 2px solid #000; padding: 5px">
                        @endif
                    </div>
                    <div class="item-content">
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody><tr>
                                    <td>User Level:</td>
                                        <td class="font-medium text-dark-medium">{{$user->usertype}}</td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td class="font-medium text-dark-medium">{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Designation:</td>
                                        <td class="font-medium text-dark-medium">{{$user->designation_id}}</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td class="font-medium text-dark-medium">{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td class="font-medium text-dark-medium">+88{{$user->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td class="font-medium text-dark-medium">{{$user->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td class="font-medium text-dark-medium">{{$user->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td>Joining Date:</td>
                                        <td class="font-medium text-dark-medium">{{$user->joining_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth:</td>
                                        <td class="font-medium text-dark-medium">{{$user->dob}}</td>
                                    </tr>
                                    <tr>
                                        <td>Religion:</td>
                                        <td class="font-medium text-dark-medium">{{$user->religion}}</td>
                                    </tr>
                                    <tr>
                                        <td>NID No:</td>
                                        <td class="font-medium text-dark-medium">{{$user->nid}}</td>
                                    </tr>
                                    <tr>
                                        <td>Activation Status:</td>
                                        <td class="font-medium text-dark-medium">
                                            @if ($user->activation_status==1)
                                                {{_('Active User')}}
                                            @elseif($user->activation_status==0)
                                             {{_('Inactive User')}}
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection