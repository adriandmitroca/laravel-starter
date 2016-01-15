@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        {!! Former::open()->action('/register') !!}

                        {!! Former::text('name', 'Name') !!}
                        {!! Former::email('email', 'E-mail Address') !!}
                        {!! Former::password('password', 'Password') !!}
                        {!! Former::password('password_confirmation', 'Confirm Password') !!}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>

                        {!! Former::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection