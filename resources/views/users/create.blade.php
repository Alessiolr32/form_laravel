<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <main class="container mt-5">
        <section>
            <h1 class="mx-auto text-center text-light rounded-3 w-50 py-2 shadow">Form Laravel</h1>
        </section>

        <section class="my-5">
            <form action="{{ route('users.store') }}" method="POST" class="p-4 p-md-5 text-light rounded-3 mx-auto col-12 col-md-8 col-lg-6 shadow">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control hover-effect" id="name" value="{{ old('name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control hover-effect" id="last_name" value="{{ old('last_name') }}" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control hover-effect" id="email"  value="{{ old('email') }}" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control hover-effect" id="password" required>
                </div>

                <div class="mb-5">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control hover-effect" id="confirm_password" required>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary w-100 hover-effect">Submit</button>
                </div>

                @if(session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
                @endif
            </form>
        </section>
    </main>
</body>

</html>
