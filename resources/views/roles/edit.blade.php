@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Edit Role</h4>
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
        {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Name:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Permission</label>
                <div class="col-sm-12 col-md-8">
                    @foreach($permission as $value)
                    <div class="form-check">
                        {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name', 'id' => 'perCheck_'.$value->id)) }}
                        <label class="form-check-label" for="perCheck_{{ $value->id }}">{{ $value->name }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2"></label>
                <div class="col-sm-12 col-md-8">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection