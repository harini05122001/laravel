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
                            {{ Auth::user()->name }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                            {{ Auth::user()->email }}
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
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
                            <p class="mb-0">New User</p>
                            
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">User Information</p>
                        <form action="add" method="POST">
                            @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                                    <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter your address">
                                    <span class="text-danger">@error('address'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pincode">Pincode:</label>
                                    <input type="text" class="form-control" name="pincode" placeholder="Enter your pincode">
                                    <span class="text-danger">@error('pincode'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Mobile Number:</label>
                                    <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile">
                                    <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
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
                                        <input type="radio" class="form-check-input" name="gender" value="male" id="male">
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="female" id="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" name="gender" value="other" id="other">
                                        <label class="form-check-label" for="other">Other</label>
                                    </div>
                                    <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skills:</label>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="programming" id="programming">
                                        <label class="form-check-label" for="programming">Programming</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="design" id="design">
                                        <label class="form-check-label" for="design">Design</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="communication" id="communication">
                                        <label class="form-check-label" for="communication">Communication</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="skills" value="problem-solving" id="problemSolving">
                                        <label class="form-check-label" for="problemSolving">Problem Solving</label>
                                    </div>
                                    <span class="text-danger">@error('skills'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="course">Course:</label>
                                    <select class="form-control" name="course">
                                        <option value="">Select a course</option>
                                        <option value="btech">B.Tech</option>
                                        <option value="be">B.E</option>
                                        <option value="bsc">B.Sc</option>
                                        <option value="msc">M.Sc</option>
                                    </select>
                                    <span class="text-danger">@error('course'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm ms-auto">Submit</button>
                    </form>
                  
                        
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
                            @php
                            $loggedInUser = App\Models\Member::where('id', Auth::id())->first();
                        @endphp
                        
                        @if($loggedInUser)
                            <h5>
                                {{ $loggedInUser->name }}
                                <span class="font-weight-light"></span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $loggedInUser->address }}
                            </div>
                        @endif                        
                            <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>{{$loggedInUser->post->title ?? ''}}
                            </div>
                            <div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
