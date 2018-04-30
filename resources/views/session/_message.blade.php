@if (Session::has('success'))
    <div>
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('danger'))
    <div>
        {{ Session::get('danger') }}
    </div>
@endif

@if (Session::has('message'))
    <div>
        {{ Session::get('message') }}
    </div>
@endif
