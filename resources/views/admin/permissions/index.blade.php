@extends('admin.layouts.admin')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="file-text"></i></div>
                                {{ __('Permissions List') }}
                            </h1>
                        </div>
                        <div class="col-auto mb-3">
                            <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.permissions.create') }}">
                                <i class="me-1" data-feather="user-plus"></i>
                                {{ __('Add New Permission') }}
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
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Created Date') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>{{ __('Title') }}</th>
                                <th>{{ __('Created Date') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar me-2"><img class="avatar-img img-fluid"
                                                    src="{{ asset('assets/img/illustrations/profiles/profile-1.png') }}" />
                                            </div>
                                            {{ $permission->title }}
                                        </div>
                                    </td>
                                    <td>{{ $permission->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                            href="{{ route('admin.permissions.show', $permission->id) }}"><i class="fa fa-eye"
                                                aria-hidden="true"></i></a>

                                        <a class="btn btn-datatable btn-icon btn-transparent-dark me-2"
                                            href="{{ route('admin.permissions.edit', $permission->id) }}"><i data-feather="edit"></i></a>

                                        <form class="btn p-0" action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                            method="POST" onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="btn btn-datatable btn-icon btn-transparent-dark me-2">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
