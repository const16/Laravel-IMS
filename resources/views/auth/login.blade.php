@extends('admin.layouts.guest')

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-11">
                            <!-- Social login form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 fw-light mb-3">Sign In</div>
                                    <!-- Social login links-->
                                    <a class="btn btn-icon btn-facebook mx-1" href="#!"><i
                                            class="fab fa-facebook-f fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-github mx-1" href="#!"><i
                                            class="fab fa-github fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-google mx-1" href="#!"><i
                                            class="fab fa-google fa-fw fa-sm"></i></a>
                                    <a class="btn btn-icon btn-twitter mx-1" href="#!"><i
                                            class="fab fa-twitter fa-fw fa-sm text-white"></i></a>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body py-4 px-5">
                                    <!-- Login form-->
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="email">Email address</label>
                                            <input
                                                class="form-control form-control-solid @error('email') is-invalid @enderror""
                                                type="email" name="email" value="{{ old('email') }}" required
                                                autofocus />

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="password">Password</label>
                                            <input
                                                class="form-control form-control-solid @error('password') is-invalid @enderror""
                                                type="password" name="password" value="{{ old('password') }}" required />

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <!-- Form Group (forgot password link)-->
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link mb-3" href="{{ route('password.request') }}">
                                                Forgot Your Password?
                                            </a>
                                        @endif

                                        <!-- Form Group (login box)-->
                                        <div class="d-flex align-items-center justify-content-between mb-0">
                                            <div class="form-check">
                                                <input class="form-check-input" id="remember" type="checkbox"
                                                    name="remember" {{ old('remember') ? 'checked' : '' }} />
                                                <label class="form-check-label" for="remember">Remember
                                                    password</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary"
                                                href="dashboard-1.html">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        New user?
                                        <a href="#">Create an account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="footer-admin mt-auto footer-dark">
                <div class="container-xl px-4">
                    <div class="row">
                        <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                        <div class="col-md-6 text-md-end small">
                            <a href="#!">Privacy Policy</a>
                            &middot;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
