
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Login </title>

    @include('cms.layouts.section.style')

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-3"></div>


            <div class="col-md-6" >
                <h2 class="font-bold">Admin Login</h2>
                <div class="ibox-content">
                    <form action="{{ route('admin-login.submit') }}" method="post">
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                    </form>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>

</body>

</html>

