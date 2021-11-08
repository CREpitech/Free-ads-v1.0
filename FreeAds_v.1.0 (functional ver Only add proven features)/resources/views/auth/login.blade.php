'''<html>

<head>
    <title>Sign-up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>

<body>
    <div class="container pt-4 pb-5">
        <div class="text-1"></div>
        <div class="text-2"></div>
        <div class="text-3"></div>
        <form action="{{ route('login-user') }}" method="post">
            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }}
            @endif
            @csrf
            <div class="text-center pt-3">
                <p class="display-7 fw-bold">Sign-<span class="ps-1">In</span></p> <small
                    class="d-flex align-items-center justify-content-center mb-3">
                    <p class="text-muted">New User?</p>
                    <div><a class="btn btn-primary" href="registration">Sign-up</a></div>
                </small>
            </div>
            <div class="row px-md-4 px-1 m-0">
                <div class="col-12">
                    <div>
                        <p class="pb-1 username">Email</p> <input type="text" class=" name form-control mb-4"
                            name="email" value="{{ old('email') }}">
                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="col-12">
                        <div>
                            <p class="pb-1 username">Password</p> <input type="password"
                                class=" name form-control mb-4" name="password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                        <div class="col-12 create">
                            <div class="d-flex align-items-center justify-content-between">
                                <button class="btn btn-primary py-3 " type="submit"><span
                                        class="fas fa-arrow-right ">Sign-In</span></button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
    </div>
</body>

</html>
