<!DOCTYPE html>
<html>
<head>
    <title>Add Members</title>
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
</head>
<body>
    <a class="btn btn-primary" href="list">Back</a>
    <div class="container mt-5">
        <h1 class="mb-4">Add Members</h1>
        <form action="add" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Enter your email">
                <span class="text-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" placeholder="Enter your address">
                <span class="text-danger">@error('address'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" class="form-control" name="pincode" placeholder="Enter your pincode">
                <span class="text-danger">@error('pincode'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile">
                <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
            </div>
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
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password">
                <span class="text-danger">@error('password'){{$message}}@enderror</span>
            </div>
            
            <button type="submit" class="btn btn-primary">Add Member</button>
        </form>
    </div>
    
    <!-- Replace with local paths to your downloaded Bootstrap JS and jQuery -->
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    
    </body>
    </html>