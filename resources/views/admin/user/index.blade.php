@extends('admin.layouts.master')

@section('title', 'User')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User List</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary" href="{{ route('admin.user.create') }}">
                    <i class="fa fa-plus"></i> Create new user
                </a>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach( $data['users'] as $user )
                        @php
                        $startingNumber = ($data['users']->currentPage() - 1) * $data['users']->perPage() + 1;
                        $adjustedIteration = $startingNumber + $loop->iteration - 1;
                        @endphp
                    <tr>
                        <td>{{ $adjustedIteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <span class="badge badge-{{ $user->email_verified_at ? "primary" : "danger" }}">
                                {{ $user->email_verified_at ? "verified" : "unverified" }}
                            </span>
                        </td>
                        <td>
                            @include('admin.shared.actions', [ 'model' => $user ])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer text-center">
            {{ $data['users']->links() }}
        </div>
    </div>
@endsection
