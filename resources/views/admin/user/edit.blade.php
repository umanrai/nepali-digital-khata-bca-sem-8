@extends('admin.layouts.master')

@section('title', 'Edit user')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit user</h3>
        </div>
        <form role="form"  action="{{ route('admin.user.update', [ 'user' => $data['user']->id ]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">
                @include('admin.user.partials.form')
            </div>
            <div class="card-footer">
                @include('admin.shared.form-buttons')
            </div>
        </form>
    </div>
@endsection
