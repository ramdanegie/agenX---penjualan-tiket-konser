<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Login Admin</title>
</head>

<body>
    <div class="container">
        <div class="main-content container">
            <div class="login-card col-md-4 mx-auto bg-white pt-1 pb-5 px-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show mb-2" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2 class="pt-4 pb-2 text-center">Login</h2>
                <form action="/admin/login" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-floating mt-1 mb-2">
                            <input required type="text" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="Email Address" name="email" value="{{ old('email') }}">
                            <label for="email" class="px-4">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="form-floating">
                            <input required type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" name="password">
                            <label for="password" class="px-4">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary justify-content-center w-100 my-3 py-2">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>
