@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Role Management</h4>
        <a href="{{ route('roles.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-times"></i> Create New Role</a>
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
                    <th width="20%">Action</th>
                </tr>
                @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a href="{{ route('roles.show', $role->id) }}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Show</a>
                        @can('role-edit')
                            <a href="{{ route('roles.edit',$role->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                        @endcan
                        @can('role-delete')
                            <a href="#" onclick="event.preventDefault(); document.getElementById('del-form').submit();" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a>
                            
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id], 'style'=>'display: none;', 'id' => 'del-form']) !!}
                                {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                            {!! Form::close() !!}
                        @endcan
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
{!! $roles->render() !!}

@endsection