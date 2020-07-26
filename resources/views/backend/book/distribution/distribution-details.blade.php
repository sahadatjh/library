@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Books</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Book Distribution Details</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Student Table Area Start Here -->
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Book Details according to the roll</h3>
            </div>
        </div>
        <hr>
        <div class="info-table table-responsive">
            <table class="table text-nowrap">
                <tbody>
                    <tr>
                        <td>Name:</td>
                        <td class="font-medium text-dark-medium">{{$student->name}}</td>
                        <td>Department:</td>
                        <td class="font-medium text-dark-medium">{{$student['department']['department_name']}}</td> 
                        <td rowspan="4">
                            @if ($student->image)
                                <img src="{{asset($student->image)}}" alt="student" style="height: 200px; width: 160px; border: 2px solid #000;padding: 7px;">
                            @endif    
                        </td>
                    <tr>
                        <td>Roll:</td>
                        <td class="font-medium text-dark-medium">{{$student->board_roll}}</td>
                        <td>Registration:</td>
                        <td class="font-medium text-dark-medium">{{$student->registration}}</td>
                    </tr>
                    <tr>
                        <td>Semester:</td>
                        <td class="font-medium text-dark-medium">{{$student['semester']['semester_name']}}</td>
                        <td>Session:</td>
                        <td class="font-medium text-dark-medium">{{$student['session']['session_name']}}</td>
                    </tr>
                    <tr>
                        <td>Gardian's Phone:</td>
                        <td class="font-medium text-dark-medium">{{$student->gardian_phone}}</td>
                        <td>Address:</td>
                        <td class="font-medium text-dark-medium">{{$student->address}}</td>
                    </tr>
                </tbody>
            </table>
            <hr><hr>
            <table class="table display text-nowrap">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input checkAll">
                                <label class="form-check-label">Sl No</label>
                            </div>
                        </th>
                        <th>Subject Name</th>
                        <th>Issue Date</th>
                        <th>Return Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $key => $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">{{$key+1}}</label>
                            </div>
                        </td>
                        <td>{{$item->book->name}} ({{$item->book->code}})</td>
                        <td>{{date('d-M-Y', strtotime($item->issue_date))}}</td>
                        <td>{{date('d-M-Y', strtotime($item->return_date))}}</td>
                        <td>
                            @if (1==$item->return_status)
                                <span class="badge badge-pill badge-success">Returned</span>
                            @elseif(0==$item->return_status)
                                <span class="badge badge-pill badge-warning">pending</span>
                            @endif
                        </td>
                        <td>
                            @if (0==$item->return_status)
                            <a href="{{route('subject.return',$item->id)}}" class="btn btn-info" title="return"><i class="fas fa-edit"></i>Return</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
<!-- Student details End Here -->

@endsection