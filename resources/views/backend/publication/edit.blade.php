@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Edit Publication</li>
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
                        <h3>Edit Publication Information</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('publication.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Publication</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('publication.update',$publication->id) }}" enctype="multipart/form-data" class="new-added-form">
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
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="name">Publication Name *</label>
                            <input id="name" type="text" name="publication_name" class="form-control @error('publication_name') is-invalid @enderror"  value="{{ $publication->publication_name }}" autofocus >
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="representative">Publication representative *</label>
                            <input id="representative" type="text" name="representative" class="form-control @error('representative') is-invalid @enderror"  value="{{ $publication->representative }}">
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="phone">Publication phone *</label>
                            <input id="phone" type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"  value="{{ $publication->phone }}" >
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="email">Publication email *</label>
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ $publication->email }}" >
                        </div>
                        <div class="col-xl-4  col-lg-4 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1" {{(1==$publication->activation_status)?'selected':''}}>Active</option>
                                <option value="0" {{(0==$publication->activation_status)?'selected':''}}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Photo(20-100KB)</label>
                            <input type="file" name="logo" class="form-control-file @error('logo') is-invalid @enderror" id="imgInp">
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30"> 
                            <img src="{{asset($publication->logo)}}" alt="No Old Logo" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000" /> <br> Old Image
                            <input type="hidden" name="oldphoto" value="{{$publication->logo}}">
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30"> 
                            <img id="blah" src="#" alt="your logo" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000" />
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