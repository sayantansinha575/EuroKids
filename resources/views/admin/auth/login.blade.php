{{-- resources/views/admin/auth/login.blade.php --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login -</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/demo.css') }}" />

    <style>
        /* small, safe defaults in case theme files differ */
        body {
            background: #f5f7fa;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
        }

        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .auth-card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 8px 30px rgba(16, 24, 40, 0.08);
            padding: 2rem;
        }

        .brand {
            text-align: center;
            margin-bottom: 1rem;
        }

        .brand img {
            height: 48px;
            display: block;
            margin: 0 auto 0.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 0.9rem;
            border: 1px solid #e6e9ee;
            border-radius: 6px;
        }

        .btn-primary {
            width: 100%;
            padding: 0.8rem;
            border-radius: 6px;
            background: #1f6feb;
            color: #fff;
            border: 0;
            font-weight: 600;
        }

        .text-muted {
            color: #6b7280;
            font-size: 0.9rem;
        }

        .is-invalid {
            border-color: #ef4444;
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.35rem;
        }

        .footer-links {
            margin-top: 1rem;
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
        }

        .banner-img {
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .banner-img.loaded {
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="auth-wrapper d-flex align-items-center min-vh-100 bg-light">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Responsive column -->
                <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">

                    <div class="card shadow-sm border-0">

                        <!-- Logo -->
                        <div class="card-header text-center bg-primary py-4">
                            <a href="#">
                                <img src="http://127.0.0.1:8000/admin/assets/img/kaiadmin/logo_light_eurokids.png"
                                    alt="EuroKids" class="img-fluid" style="max-height: 50px;">
                            </a>
                        </div>

                        <!-- Card body -->
                        <div class="card-body px-4 py-4">

                            <div class="text-center mb-4">
                                <h4 class="fw-bold mb-1">ADMIN LOGIN</h4>
                                <p class="text-muted small mb-0">Sign in to continue</p>
                            </div>

                            <form method="POST" action="" accept-charset="UTF-8">

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label">Email address</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email"
                                        value="<?= old('email') ?>" required placeholder="user@example.com">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <label for="password" class="form-label mb-0">Password</label>
                                        <a href="#" class="small text-muted">Forgot password?</a>
                                    </div>

                                    <div class="input-group mt-1">
                                        <input type="password" name="password" id="password" class="form-control"
                                            placeholder="Enter your password" required>
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-eye"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="d-grid mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Login
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Admin theme JS - adjust paths to match your theme -->
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/kaiadmin.min.js') }}"></script>
    <script>
        document.querySelector('.input-group-text').addEventListener('click', function() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        });
    </script>
</body>

</html>
