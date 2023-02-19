@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Show User</h4>
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>
    <div class="card-body p-3">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <td>Name:</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Roles:</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection