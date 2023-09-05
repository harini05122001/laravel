<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>
    <!-- Replace with local paths to your downloaded Bootstrap CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Members List</h1>
    <a class="btn btn-primary" href="add">Add</a>
    <a class="btn btn-primary" href="/">Back</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pincode</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Skills</th>
                <th>Course</th>
                <th>Password</th>
                <th>Post</th>
                <th>Role</th>
                <th>Location</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $member)
            <tr>
                <td>{{$member['id']}}</td>
                <td>{{$member['name']}}</td>
                <td>{{$member['email']}}</td>
                <td>{{$member['address']}}</td>
                <td>{{$member['pincode']}}</td>
                <td>{{ $member->formatted_mobile }}</td> 
                <td>{{$member['gender']}}</td>
                <td>{{$member['skills']}}</td>
                <td>{{$member['course']}}</td>
                <td>{{$member['password']}}</td>
                <td>{{$member->post->title ?? ''}}</td>
                <td>
                    @foreach($member->role ?? [] as $role)
                        {{$role->title}}<br>
                    @endforeach
                </td>
                <td>
                @foreach($member->location as $location)
                     {{ $location->place }}<br>
                @endforeach
                </td>
                <td>
                    <a class="btn btn-danger" href={{"delete/".$member['id']}}>Delete</a>
                    <a class="btn btn-primary" href={{"edit/".$member['id']}}>Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Replace with local paths to your downloaded Bootstrap JS and jQuery -->
<script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

</body>
</html>