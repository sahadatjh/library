@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Students</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Student</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>All Students Data</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('student.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Student</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data" class="new-added-form">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="name">Student Name *</label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"placeholder="Your Name"  autocomplete="name" autofocus>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="college_roll">College Roll *</label>
                            <input id="college_roll" type="text" name="college_roll" class="form-control @error('college_roll') is-invalid @enderror"  value="{{ old('college_roll') }}"placeholder="Ex. 662001"  autocomplete="college_roll" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="board_roll">Board Roll *</label>
                            <input id="board_roll" type="text" name="board_roll" class="form-control @error('board_roll') is-invalid @enderror"  value="{{ old('board_roll') }}"placeholder="Ex. 876543"  autocomplete="board_roll" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="registration">Registration *</label>
                            <input id="registration" type="text" name="registration" class="form-control @error('registration') is-invalid @enderror"  value="{{ old('registration') }}"placeholder="Ex. 656565"  autocomplete="registration" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="fname">Father's Name *</label>
                            <input id="fname" type="text" name="fname" class="form-control @error('fname') is-invalid @enderror"  value="{{ old('fname') }}"placeholder="Father's Name"  autocomplete="fname" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="mname">Mother's Name *</label>
                            <input id="mname" type="text" name="mname" class="form-control @error('mname') is-invalid @enderror"  value="{{ old('mname') }}"placeholder="Mother's Name"  autocomplete="mname" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="gardian_profession">Gardian Profession </label>
                            <input type="text" id="gardian_profession" name="gardian_profession"  placeholder="Ex. Farmar" class="form-control  @error('gardian_profession') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="gardian_phone">Phone Number(Gardian) *</label>
                            <input type="text" id="gardian_phone" name="gardian_phone"  placeholder="01756603812" class="form-control  @error('gardian_phone') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="phone">Phone Number(Student) *</label>
                            <input type="text" id="phone" name="phone"  placeholder="01756603812" class="form-control  @error('phone') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="email">Student Email *</label>
                            <input id="email" type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Ex. sahadat@gmail.com" autocomplete="email">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="blood_group">Blood Group *</label>
                            <select name="blood_group" id="blood_group" class="select2 @error('blood_group') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="A+ (Positive)">A+ (Positive)</option>
                                <option value="A- (Negative)">A- (Negative)</option>
                                <option value="B+ (Positive)">B+ (Positive)</option>
                                <option value="B- (Negative)">B- (Negative)</option>
                                <option value="O+ (Positive)">O+ (Positive)</option>
                                <option value="O- (Negative)">O- (Negative)</option>
                                <option value="AB+ (Positive)">AB+ (Positive)</option>
                                <option value="AB- (Negative)">AB- (Negative)</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="gender">Gender *</label>
                            <select name="gender" id="gender" class="select2 @error('gender') is-invalid @enderror">
                                <option value="">Please Select Gender *</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Other's</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="religion">Religion *</label>
                            <select name="religion" id="religion" class="select2  @error('religion') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="Islam">Islam</option>
                                <option value="Christian">Christian</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddhish">Buddhish</option>
                                <option value="Other's">Other's</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="nationality">Nationality *</label>
                            <input type="text" id="nationality" name="nationality" value="Bangladeshi" class="form-control  @error('nationality') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="admission_date">Admission Date *</label>
                            <input type="text" name="admission_date" id="admission_date" placeholder="dd/mm/yyyy" class="form-control air-datepicker @error('admission_date') is-invalid @enderror " data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="dob">Date Of Birth *</label>
                            <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker @error('dob') is-invalid @enderror " data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="department_id">Department*</label>
                            <select name="department_id" id="department_id" class="select2 @error('department_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($departments as $item)
                                    <option value="{{$item->id}}">{{$item->department_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="semester_id">Semester *</label>
                            <select name="semester_id" id="semester_id" class="select2 @error('semester_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($semesters as $item)
                                    <option value="{{$item->id}}">{{$item->semester_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="session_id">Session *</label>
                            <select name="session_id" id="session_id" class="select2 @error('session_id') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                @foreach ($sessions as $item)
                                    <option value="{{$item->id}}">{{$item->session_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="semester_fee">Semester Fee </label>
                            <input type="number" id="semester_fee" name="semester_fee"  placeholder="Ex. 11000" class="form-control  @error('semester_fee') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="total_fee">Total Fee </label>
                            <input type="number" id="total_fee" name="total_fee"  placeholder="Ex. 88000" class="form-control  @error('total_fee') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="discount">Discount% (Persent) </label>
                            <input type="number" id="discount" name="discount"  placeholder="Ex. 200" class="form-control  @error('discount') is-invalid @enderror">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="address">Adress *</label>
                            <textarea id="address" name="address" class="textarea form-control @error('address') is-invalid @enderror" cols="10" rows="4"></textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="remarks">Remarks *</label>
                            <textarea id="remarks" name="remarks" class="textarea form-control @error('remarks') is-invalid @enderror" cols="10" rows="4"></textarea>
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Photo(20-200KB)</label>
                            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="imgInp">
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30"> 
                            <img id="blah" src="#" alt="your image" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000" />
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!--code for show image when select-->
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }
    $("#imgInp").change(function() {
        readURL(this);
    });
    </script>
    
@endsection