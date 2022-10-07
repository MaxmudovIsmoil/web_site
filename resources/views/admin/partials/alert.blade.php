@if ($errors->any())
<div class="alert alert-danger" id="message">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (Session::has('message'))
<div class="alert alert-primary" id="message">
    <ul>
         <li>{{ Session::get('message') }}</li>
    </ul>
</div>
@endif