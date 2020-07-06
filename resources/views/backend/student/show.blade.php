@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Students</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Student Details</li>
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
                        <h3>Student Details</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('student.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Student</button></a>
                    </div>
                </div>
                <hr><hr>
                <div class="single-info-details">
                    <div class="item-img">
                        @if ($student->image)
                            <img src="{{asset($student->image)}}" alt="student" style="height: 200px; width: 160px; border: 2px solid #000;padding: 7px">
                        @endif
                    </div>
                    <div class="item-content">
                        <div class="header-inline item-header">
                            <h3 class="text-dark-medium font-medium">{{$student->name}}</h3>
                            <div class="header-elements">
                                <ul>
                                    <li><a href="#"><i class="far fa-edit"></i></a></li>
                                    <li><a href="#"><i class="fas fa-print"></i></a></li>
                                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td class="font-medium text-dark-medium">{{$student->name}}</td>
                                        <td>College Roll:</td>
                                        <td class="font-medium text-dark-medium">{{$student->college_roll}}</td>
                                    </tr>
                                    <tr>
                                        <td>Father's Name:</td>
                                        <td class="font-medium text-dark-medium">{{$student->fname}}</td>
                                        <td>Board Roll:</td>
                                        <td class="font-medium text-dark-medium">{{$student->board_roll}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mother's Name:</td>
                                        <td class="font-medium text-dark-medium">{{$student->mname}}</td>
                                        <td>Registration:</td>
                                        <td class="font-medium text-dark-medium">{{$student->registration}}</td>
                                    </tr>
                                    <tr>
                                        <td>Department:</td>
                                        <td class="font-medium text-dark-medium">{{$student['department']['department_name']}}</td>
                                        <td>Student's Phone:</td>
                                        <td class="font-medium text-dark-medium">{{$student->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Semester:</td>
                                        <td class="font-medium text-dark-medium">{{$student['semester']['semester_name']}}</td>
                                        <td>Gardian's Phone:</td>
                                        <td class="font-medium text-dark-medium">{{$student->gardian_phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Session:</td>
                                        <td class="font-medium text-dark-medium">{{$student['session']['session_name']}}</td>
                                        <td>Gardian's Profession:</td>
                                        <td class="font-medium text-dark-medium">{{$student->gardian_profession}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email (Studenta):</td>
                                        <td class="font-medium text-dark-medium">{{$student->email}}</td>
                                        <td>Blood Group:</td>
                                        <td class="font-medium text-dark-medium">{{$student->blood_group}}</td>
                                    </tr>
                                    <tr>
                                        <td>Religion:</td>
                                        <td class="font-medium text-dark-medium">{{$student->religion}}</td>
                                        <td>Nationality:</td>
                                        <td class="font-medium text-dark-medium">{{$student->nationality}}</td>
                                    </tr>
                                    <tr>
                                        <td>Admission Date:</td>
                                        <td class="font-medium text-dark-medium">{{$student->admission_date}}</td>
                                        <td>Date Of Birth:</td>
                                        <td class="font-medium text-dark-medium">{{$student->dob}}</td>
                                    </tr>
                                    <tr>
                                        <td>Semester fee (After Discount):</td>
                                        <td class="font-medium text-dark-medium">{{$student->semester_fee}}</td>
                                        <td>Address:</td>
                                        <td class="font-medium text-dark-medium">{{$student->address}}</td>
                                    </tr>
                                    <tr>
                                        <td>Remarks:</td>
                                        <td class="font-medium text-dark-medium">{{$student->remarks}}</td>
                                        <td>Created By:</td>
                                        <td class="font-medium text-dark-medium">{{$student['user']['name']}}</td>
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