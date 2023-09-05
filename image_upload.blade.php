<!DOCTYPE html>
<head>
    <title>Laravel Image Upload</title>
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/signin.css') !!}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Image Upload</h2>
            </div>
            <div class="panel-body">
                <form  method="POST" enctype="multipart/form-data" action="{{ route('image.submit') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" name="image" id="form-control">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                    </div>
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <strong>Oops! There is some problem</strong>
                            <ul>
                                @foreach ($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message=Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{$message}} </strong>
                        </div>
                        @if (Session::has('image_name'))
                        <img src="{{ asset('storage/images/' . Session::get('image_name')) }}" width="300" height="200" alt="">
                        @endif
                    @endif
                </form>
            </div>
        </div>
    </div>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
</body>
</html>