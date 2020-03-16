@extends('master')
@section('title', 'Add new user')
@section('content')
    <h3>Add a new user</h3>
    <h5>Register code: <span class="badge badge-secondary">{{ $reg_code }}</span></h5>
    <form method="post" action="">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Input username" class="form-control col-8 fullwidth">
            <input type="hidden" name="reg_code" value="{{ $reg_code }}">
            <button type="submit" class="btn btn-dark my-2">Submit</button>
        </div>
    </form>
@endsection
