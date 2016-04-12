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

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert">×</button>
        @if(is_array(session()->get('error')))
            @foreach(session()->get('error') as $error)
                {!! $error . '<br/>' !!}
            @endforeach
        @else
            {!! session()->get('error')  !!}
        @endif
    </div>
@endif
