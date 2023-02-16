@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Users Management</h4>
        <a href="{{ route('users.create') }}" class="btn btn-icon icon-left btn-success"><i class="fas fa-times"></i> Create New User</a>
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
                    <th>Email</th>
                    <th>Roles</th>
                    <th width="20%">Action</th>
                </tr>
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames())) 
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach 
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i> Show</a>
                        <a href="{{ route('users.edit',$user->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('del-form').submit();" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id], 'style'=>'display: none;', 'id' => 'del-form']) !!}
                            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
{!! $data->render() !!}
@endsection