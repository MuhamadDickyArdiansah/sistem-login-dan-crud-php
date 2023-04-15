<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/loginlogin.css">
    <title>Sistem SKK</title>
</head>

<body>

    <section class="d-flex align-items-center" style="min-height: 100vh">
        <div class="container">
            <div class="row g-0 shadow">

                <div class="col-lg-6 bg-img"></div>

                <div class="col-lg-6 px-5 py-3 ">
                    <h1 class="fw-bold py-3"><a href="/" class="text-decoration-none text-dark">Sistem SKK</a></h1>
                    <h4 class="mb-4">Register</h4>

                    @if ($errors->any())
                    <div class="alert alert-danger">

                        @foreach ($errors->all() as $item)
                        {{ $item }}

                        @endforeach

                    </div>
                    @endif

                    @if (Session::get('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    <!-- <form action="/login" method="post">
                        @csrf
                        <div class="col-lg-8">
                            <input type="email" name="email" class="form-control my-3 p-3 @error('email') is-invalid @enderror" placeholder="Email Address" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="
                                    col-lg-8">
                            <input type="password" name="password" class="form-control my-3 p-3 @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <div class="invalid-feedback mb-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                    <form action="/sesi/create" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" value="{{ Session::get('name') }}" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3 d-grid">
                            <button name="submit" type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <p class="mt-3 opacity-75">have an account?
                            <a class="text-decoration-none" href="/sesi">Login now</a>
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>


    {{-- Bootsrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js integrity=" sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>