@extends('admin.layouts.master')

@section('title', 'Show user')

@section('content')

    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Show User</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $data['user']->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $data['user']->email }}</td>
                    </tr>
                    <tr>
                        <th>Registered At</th>
                        <td>{{ $data['user']->created_at }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge badge-{{ $data['user']->email_verified_at ? "primary" : "danger" }}">
                                {{ $data['user']->email_verified_at ? "verified" : "unverified" }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Actions</th>
                        <td>
                            @include('admin.shared.actions', [ 'model' => $data['user'], ])
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
