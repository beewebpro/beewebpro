@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Brands</h4>
        <a href="{{ route('brands.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-times"></i> Create New brand</a>
    </div>
    <div class="card-body p-3">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Website</th>
                    <th>Status</th>
                    <th width="20%">Action</th>
                </tr>
                @foreach ($brands as $key => $brand)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->website }}</td>
                    <td>{{ $brand->status }}</td>
                    <td>
                        <a href="{{ route('brands.show', $brand->id) }}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Show</a>
                        <a href="{{ route('brands.edit',$brand->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('del-form').submit();" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['brands.destroy', $brand->id], 'style'=>'display: none;', 'id' => 'del-form']) !!}
                            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
{!! $brands->render() !!}
@endsection