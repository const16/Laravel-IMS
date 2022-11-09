@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                {{ __('Add User') }}
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.users.index') }}">
                                <i class="me-1" data-feather="arrow-left"></i>
                                {{ __('Back to Users List') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">{{ __('Account Details') }}</div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.store') }}" method="POST">
                                @csrf

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Enter your name" value="{{ old('name', '') }}" autofocus />
                                        @error('name')
                                            <p class="text-sm text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="email">Email address</label>
                                        <input class="form-control" id="email" name="email" type="email"
                                            placeholder="Enter your email address" value="{{ old('email', '') }}" />
                                        @error('email')
                                            <p class="text-sm text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Form Group (password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="password">Password</label>
                                    <input class="form-control" id="password" name="password" type="password"
                                        placeholder="Enter your password" />
                                    @error('password')
                                        <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Form Group (confirm password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control" id="password_confirmation" name="password_confirmation"
                                        type="password" placeholder="Enter your password confirmation" />
                                </div>
                                <!-- Form Group (Roles)-->
                                <div class="mb-3">
                                    <label class="small mb-1">Role</label>
                                    <select class="form-select" name="roles[]" id="roles"
                                        aria-label="Default select example">
                                        <option selected disabled>Select a role:</option>
                                        @foreach ($roles as $id => $role)
                                            <option
                                                value="{{ $id }}"{{ in_array($id, old('roles', [])) ? ' selected' : '' }}>
                                                {{ $role }}</option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                        <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Submit button-->
                                <button class="btn btn-primary" type="submit">{{ __('Add user') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
