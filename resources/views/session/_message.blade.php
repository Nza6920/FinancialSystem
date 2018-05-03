@if (Session::has('success'))
    <div>
        <p style="color:red;">{{ Session::get('success') }}</p>
    </div>
@endif

@if (Session::has('danger'))
    <div>
        <p style="color:red;">{{ Session::get('danger') }}</p>
    </div>
@endif

@if (Session::has('message'))
    <div>
        <p style="color:red;">{{ Session::get('message') }}</p>
    </div>
@endif
