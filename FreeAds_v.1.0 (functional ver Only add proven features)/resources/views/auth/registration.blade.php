<html>

<head>
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>

<body>
    <div class="container pt-4 pb-5">
        <div class="text-1"></div>
        <div class="text-2"></div>
        <div class="text-3"></div>
        <form action="{{ route('register-user') }}" method="post">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}
            @endif
            @csrf
            <div class="text-center pt-3">
                <p class="display-7 fw-bold">Create<span class="ps-1">account</span></p> <small
                    class="d-flex align-items-center justify-content-center mb-3">
                    <p class="text-muted">already have an account?</p>
                    <div><a class="btn btn-primary" href="login">sign in</a></div>
                </small>
            </div>
            <div class="row px-md-4 px-1 m-0">
                <div class="col-12">
                    <div>
                        <p class="pb-1 full_name">Full Name</p> <input type="text" class=" name form-control mb-4"
                            name="full_name" value="{{ old('full_name') }}">
                        <span class="text-danger">@error('full_name') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <p class="pb-1 username">User Name</p> <input type="text" class=" name form-control mb-4"
                            name="username" value="{{ old('username') }}">
                        <span class="text-danger">@error('username') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <p class="pb-1 phone_number">Phone Number</p> <input type="text" class=" name form-control mb-4"
                            name="phone_number" value="{{ old('phone_number') }}">
                        <span class="text-danger">@error('phone_number') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <p class="pb-1 email">Email</p> <input type="email" class=" name form-control mb-4"
                            name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <p class="pb-1 password">Password</p> <input type="password" class=" name form-control mb-4"
                            name="password" value="{{ old('password') }}">
                        <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div><!--Reviewed until here -->
                </div>
                <div class="col-12 create">
                    <div class="d-flex align-items-center justify-content-between">
                        <button class="btn btn-primary py-3 " type="submit"><span class="fas fa-arrow-right ">Create
                                Your Account</span></button>
                    </div>
                </div>
        </form>
    </div>
   {{--  </div>
    </div>
    </div> --}}
</body>

</html>



















































