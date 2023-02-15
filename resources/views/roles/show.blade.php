@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-header" style="justify-content: space-between;">
        <h4>Show Role</h4>
        <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
    </div>
    <div class="card-body">
        <h4>Name: <strong>{{ $role->name }}</strong></h4>

        <div class="section-title">Permissions:</div>
        @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
            <div class="pretty p-default p-round p-thick">
                <input type="checkbox" checked readonly/>
                <div class="state p-success-o">
                    <label>{{ $v->name }}</label>
                </div>
            </div>
            @endforeach
        @endif
    </div>
</div>
@endsection