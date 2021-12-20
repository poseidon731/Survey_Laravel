@extends('layouts.user')

@section('styles')
<style>
    .avatar_wrapper {
        position: relative;
    }

    .search_avatar_icon {
        position: absolute;
        width: 30px;
        height: 30px;
        border: 1px solid transparent;
        border-radius: 30px;
        background: #000;
        opacity: 0.8;
        top: 55%;
        left: 55%;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .user_avatar {
        cursor: pointer;
        transition: 0.3s;
    }
    
    .user_avatar:hover {
        opacity: 0.5
    }
</style>
@endsection

@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Profile Page</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <div class="m-r-10">
                    <div class="lastmonth"></div>
                </div>
                <div class=""><small>LAST MONTH</small>
                    <h4 class="text-info m-b-0 font-medium">$58,256</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <form id="upload_form" name="upload_form" method="POST" action="">
                            <input type="file" id="photo" name="photo" style="display:none;" accept="image/*">
                        </form>
                        <div id="avatar_wrapper">
                            @if($user->photo == '')
                                <img src="{{ asset('images/users/5.jpg') }}" id="user_avatar" class="rounded-circle user_avatar" width="150" />
                            @else
                                <img src="{{ asset('storage/' . $user->photo) }}" id="user_avatar" class="rounded-circle user_avatar" width="150" />
                            @endif
                            <span class="search_avatar_icon"><i class="fa fa-search"></i></span>
                        </div> 
                        <h4 class="card-title mt-3">{{ $user->firstName}} {{ $user->lastName }}</h4>
                        <h6 class="card-subtitle">{{ $user->email }}</h6>
                    </center>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <ul class="nav nav-pills custom-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user-info-tablinks" data-toggle="pill" href="#user-info-tab" role="tab" aria-controls="pills-timeline" aria-selected="true">User Information</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="user-info-tab" role="tabpanel" aria-labelledby="user-info-tablinks">
                        <div class="card-body">
                            <form class="form-horizontal form-material" id="user_info_form" name="user_info_form" method="POST" action="{{ route('user.user.updateProfile') }}">
                                @csrf
                                <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                <div class="form-group">
                                    <label class="col-md-12">First Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="First Name" class="form-control form-control-line" id="firstName" name="firstName" value="{{ $user->firstName }}">
                                    </div>
                                    @error('firstName')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Last Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Last Name" class="form-control form-control-line" id="lastName" name="lastName" value="{{ $user->lastName }}">
                                    </div>
                                    @error('lastName')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Email" class="form-control form-control-line" id="email" name="email" value="{{ $user->email }}">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <input type="hidden" id="active" name="active" value="1" />
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <hr />

                        <div class="card-body">
                            <form class="form-horizontal form-material" id="secret_info_form" name="secret_info_form" method="POST" action="{{ route('user.user.resetpwd') }}">
                                @csrf
                                <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password" class="control-label col-form-label">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class=" fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                                        </div>
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="password_confirmation" class="control-label col-form-label">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class=" fas fa-key"></i></span>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Change Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    var base_url = "{{ url('/') }}";

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var file_data = $('#photo').prop('files')[0];
                var form_data = new FormData();
                form_data.append('photo', file_data);
                form_data.append('_token', $("[name='_token']").val());
                $.ajax({
                    url: base_url + '/user/users/avatarUpload',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'post',
                    success: function (response) {
                        $('#user_avatar').attr('src', e.target.result);
                    }
                });
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#user_avatar").on('click', function() {
        $("#photo").click();
    });

    $("#photo").on('change', function(){
        readURL(this);
    });
</script>

@endsection