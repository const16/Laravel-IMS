@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                {{ __('Edit Role') }}
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.roles.index') }}">
                                <i class="me-1" data-feather="arrow-left"></i>
                                {{ __('Back to Roles List') }}
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
                        <div class="card-header">{{ __('Permission Details') }}</div>
                        <div class="card-body">
                            <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                                @csrf
                                @method('PATCH')

                                <!-- Form Row-->
                                <!-- Form Group (title)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="title">Title</label>
                                    <input class="form-control" id="title" name="title" type="text"
                                        placeholder="Enter the role title" value="{{ old('title', $role->title) }}" autofocus />
                                    @error('title')
                                        <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <!-- Submit button-->
                                <button class="btn btn-primary" type="submit">{{ __('Save role') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
