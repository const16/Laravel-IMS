@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="user"></i>
                                </div>
                                {{ __('User Profile') }}
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.users.create') }}"">
                                <i class="me-1" data-feather="user-plus"></i>
                                {{ __('Add New User') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div>
                            <div>
                                <a href="{{ route('admin.users.index') }}">{{ __('Back to list') }}</a>
                            </div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <table>
                                                <tr>
                                                    <th scope="col">
                                                        {{ __('ID') }}
                                                    </th>
                                                    <td>
                                                        {{ $user->id }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">
                                                        {{ __('Name') }}
                                                    </th>
                                                    <td>
                                                        {{ $user->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Email') }}
                                                    </th>
                                                    <td>
                                                        {{ $user->email }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __('Roles') }}
                                                    </th>
                                                    <td>
                                                        @foreach ($user->roles as $role)
                                                            <span>
                                                                {{ $role->title }}
                                                            </span>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
