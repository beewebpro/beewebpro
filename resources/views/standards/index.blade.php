@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Standards</h4>
        <a href="{{ route('standards.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-times"></i> Create New Standard</a>
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
                @foreach ($standards as $key => $standard)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $standard->name }}</td>
                    <td>{{ $standard->website }}</td>
                    <td>{{ $standard->status }}</td>
                    <td>
                        <a href="{{ route('standards.show', $standard->id) }}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Show</a>
                        <a href="{{ route('standards.edit',$standard->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('del-form').submit();" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['standards.destroy', $standard->id], 'style'=>'display: none;', 'id' => 'del-form']) !!}
                            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
{!! $standards->render() !!}
@endsection