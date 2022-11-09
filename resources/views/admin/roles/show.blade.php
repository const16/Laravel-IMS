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
                                    <i data-feather="file-text"></i>
                                </div>
                                {{ __('Roles List') }}
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.roles.create') }}"">
                                <i class="me-1" data-feather="role-plus"></i>
                                {{ __('Add New Role') }}
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
                                <a href="{{ route('admin.roles.index') }}">{{ __('Back to list') }}</a>
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
                                                        {{ $role->id }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="col">
                                                        {{ __('Title') }}
                                                    </th>
                                                    <td>
                                                        {{ $role->title }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        {{ __("Created Date") }}
                                                    </th>
                                                    <td>
                                                        {{ $role->created_at->diffForHumans() }}
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
