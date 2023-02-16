@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Create New User</h4>
        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
    </div>
    <div class="card-body p-3">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Name:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Email:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Password:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Confirm Password:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Name:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::select('roles', $roles, null, array('class' => 'form-control')) !!}
                </div>
            </div>
            
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2"></label>
                <div class="col-sm-12 col-md-8">
                    <button type="submit" class="btn btn-primary">Save Add</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>

@push('style')
    <link rel="stylesheet" href="{{ asset('bwp/assets/bundles/jquery-selectric/selectric.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('bwp/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
@endpush

@endsection