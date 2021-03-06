
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin | Login </title>

    @include('layouts.section.style')

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-3"></div>
               
            
            <div class="col-md-6" >
                <h2 class="font-bold">User Registration</h2>
                <div class="ibox-content">
                    <form method="POST" action="{{ route('register') }}">
                        @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ old('name') }}">
                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                            <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm password" >
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Registration</button>

                    </form>
                  
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        {{-- <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>?? 2014-2015</small>
            </div>
        </div> --}}
    </div>

</body>

</html>



