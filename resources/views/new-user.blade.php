@extends('master')
@section('title', 'Add new user')
@section('top-script')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endsection
@section('content')
    <h3>Add a new user</h3>
    <h5>Register code: <span class="badge badge-secondary">{{ $reg_code }}</span></h5>
    <form method="post" action="" id="newUserForm">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Input username" class="form-control col-8 fullwidth">
            <input type="hidden" name="reg_code" value="{{ $reg_code }}">
            <button type="submit" class="btn btn-dark my-2" id="submitBtn">Submit</button>
        </div>
    </form>
@endsection
@section('bot-script')
    <script>
        $('#newUserForm').submit(function (e) {
            e.preventDefault()
            $('#submitBtn').attr('disabled', true)
            this.submit()
        });
    </script>
@endsection
