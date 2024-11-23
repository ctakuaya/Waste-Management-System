

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/portal.css') }}">
</head>
<body class="app app-login p-0">


    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4">
                        <a href="{{ route('dashboard') }}">
                            <!-- Replace SVG with favicon.ico -->
                            <img src="{{ asset('favicon.ico') }}" class="block h-9 w-auto" alt="Logo" />
                        </a>
                    </div>
                    <h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
                    <div class="auth-form-container text-start">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="email mb-3">
                                <label for="email" class="sr-only">{{ __('Email') }}</label>
                                <input id="email" class="form-control signin-email" type="email" name="email" :value="old('email')" placeholder="Email address" required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="password mb-3">
                                <label for="password" class="sr-only">{{ __('Password') }}</label>
                                <input id="password" class="form-control signin-password" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember">
                                            <label class="form-check-label" for="remember_me">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            @if (Route::has('password.request'))
                                                <a class="text-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">
                                    {{ __('Log In') }}
                                </button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">
                            No Account? Sign up <a class="text-link" href="{{ route('register') }}">here</a>.
                        </div>
                    </div>
                </div>

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
                    </div>
                </footer>
            </div>
        </div>

        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder"></div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    <div class="overlay-content p-3 p-lg-4 rounded">
                        <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
                        <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
