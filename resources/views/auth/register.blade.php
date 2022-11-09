@extends('admin.layouts.guest')

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Social registration form-->
                            <div class="card my-5">
                                <div class="card-body p-5 text-center">
                                    <div class="h3 fw-light mb-3">Create an Account</div>
                                    <div class="small text-muted mb-2">Sign in using...</div>
                                    <!-- Social registration links-->
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
                                <div class="card-body p-5">
                                    <div class="text-center small text-muted mb-4">...or enter your information below.</div>
                                    <!-- Login form-->
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Form Group (name)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="name">Name</label>
                                            <input
                                                class="form-control form-control-solid @error('name') is-invalid @enderror"
                                                type="text" name="name" value="{{ old('name') }}" required
                                                autofocus />

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="text-gray-600 small" for="email">Email address</label>
                                            <input
                                                class="form-control form-control-solid @error('email') is-invalid @enderror"
                                                type="text" name="email" value="{{ old('email') }}" required />

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- Form Row-->
                                        <div class="row gx-3">
                                            <div class="col-md-6">
                                                <!-- Form Group (choose password)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="password">Password</label>
                                                    <input
                                                        class="form-control @error('password') is-invalid @enderror form-control-solid"
                                                        type="password" id="password" name="password" aria-label="Password"
                                                        aria-describedby="password" />

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (confirm password)-->
                                                <div class="mb-3">
                                                    <label class="text-gray-600 small" for="password-confirm">Confirm
                                                        Password</label>
                                                    <input class="form-control form-control-solid" type="password"
                                                        id="password-confirm" name="password_confirmation"
                                                        aria-label="Confirm Password" aria-describedby="password-confirm" />
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Form Group (form submission)-->
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-check">
                                                <input class="form-check-input" id="checkTerms" type="checkbox"
                                                    value="" />
                                                <label class="form-check-label" for="checkTerms">
                                                    I accept the
                                                    <a href="#!">terms &amp; conditions</a>
                                                    .
                                                </label>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <hr class="my-0" />
                                <div class="card-body px-5 py-4">
                                    <div class="small text-center">
                                        Have an account?
                                        <a href="auth-login-social.html">Sign in!</a>
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
