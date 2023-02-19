@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Create New Brand</h4>
        <a class="btn btn-primary" href="{{ route('brands.index') }}"> Back</a>
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
        {!! Form::open(array('route' => 'brands.store','method'=>'POST', 'enctype' => 'multipart/form-data')) !!}
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Name:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Website:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('website', null, array('placeholder' => 'Website','class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Description:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'summernote')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Logo:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::file('image', array('class' => 'form-control')) !!}
                </div>
            </div>
            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Order:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::text('order', null, array('placeholder' => 'Order','class' => 'form-control')) !!}
                </div>
            </div>

            <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Status:</label>
                <div class="col-sm-12 col-md-6">
                    {!! Form::select('status', array('1' => 'Disable', '2' => 'Active'), null, array('class' => 'form-control')) !!}
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
    <link rel="stylesheet" href="{{ asset('bwp/assets/bundles/summernote/summernote-bs4.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('bwp/assets/bundles/summernote/summernote-bs4.js') }}"></script>
@endpush

@endsection