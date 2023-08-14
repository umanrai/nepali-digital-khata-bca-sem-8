@extends('admin.layouts.master')

@section('title', 'Create user')

@section('content')

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create new user</h3>
        </div>
        <form role="form"  action="{{ route('admin.user.store') }}" method="post">
            @csrf
            <div class="card-body">
                @include('admin.user.partials.form')
            </div>
            <div class="card-footer">
                @include('admin.shared.form-buttons')
            </div>
        </form>
    </div>
@endsection
