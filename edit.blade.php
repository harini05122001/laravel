@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Profile'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/logo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{$data['name']}}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{$data['email']}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Profile</p>
                            <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        <form action="/edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$data['id']}}"/>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" value="{{$data['name']}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email" value="{{$data['email']}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" value="{{$data['address']}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pincode">Pincode:</label>
                                    <input type="text" class="form-control" name="pincode" value="{{$data['pincode']}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile Number:</label>
                                    <input type="text" class="form-control" name="mobile" value="{{$data['mobile']}}">
                                </div>
                                
                            </div>
                        </div>
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Contact Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="male" {{ $data['gender'] === 'male' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="female" {{ $data['gender'] === 'female' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="other" {{ $data['gender'] === 'other' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skills:</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="programming" {{ $data['skills'] === 'programming' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="programming">Programming</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="design" {{ $data['skills'] === 'design' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="design">Design</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="communication" {{ $data['skills'] === 'communication' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="communication">Communication</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="problem-solving" {{ $data['skills'] === 'problem-solving' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="problemSolving">Problem Solving</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="course">Course:</label>
                                    <select class="form-control" name="course">
                                        <option value="btech" {{ $data['course'] === 'btech' ? 'selected' : '' }}>B.Tech</option>
                                        <option value="be" {{ $data['course'] === 'be' ? 'selected' : '' }}>B.E</option>
                                        <option value="bsc" {{ $data['course'] === 'bsc' ? 'selected' : '' }}>B.Sc</option>
                                        <option value="msc" {{ $data['course'] === 'msc' ? 'selected' : '' }}>M.Sc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="text" class="form-control" name="password" value="{{$data['password']}}">
                                </div>
                            </div>
                            
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Update</button>
                     </form>
                        <hr class="horizontal dark">
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/logo2.png"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <h5>
                                {{$data['name']}}    <span class="font-weight-light"></span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i> {{$data['address']}}
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
