@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="col-md-offset-4 col-md-4">
            {!! Former::openVertical() !!}
            {!! Former::email('email') !!}
            {!! Former::password('password') !!}
            {!! Former::checkbox('remember', '')->text('Remember') !!}
            {!! Former::actions()->large_primary_submit('Log in') !!}
            {!! Former::close() !!}
        </div>
    </div>
@endsection