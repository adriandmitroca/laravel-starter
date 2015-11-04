@if(session()->has('success'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {!! session()->get('success') !!}
    </div>
@endif

@if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {!! session()->get('danger') !!}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {!! session()->get('warning') !!}
    </div>
@endif

@if(count($errors))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">×</button>
        @foreach($errors->all() as $error)
            {!! $error . '<br>' !!}
        @endforeach
    </div>
@endif