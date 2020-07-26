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
                <a href="{{route('distribution.create')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel"> Issue Book</button></a>
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
                        <th>Roll</th>
                        <th>Reg No</th>
                        <th>Student Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rolls as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td>{{$item->student_roll}}</td>
                        <td>{{$item->studentInfo->registration}}</td>
                        <td>{{$item->studentInfo->name}}</td>
                        <td>{{$item->studentInfo->phone}}</td>
                        <td>
                            <a href="{{route('distribution.details',$item->student_roll)}}" class="btn btn-info"><i class="fas fa-eye"></i> view</a>
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