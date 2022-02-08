@if(session()->has('success'))
    <alert type="success" :message="session()->get('success)">
    </alert>
@endif

@if(session()->has('error'))
    <alert type="danger" :message="session()->get('error)"></alert>
@endif

@if($errors->any())
    @foreach($errors->all() as $error)
        <alert type="danger" :message="$error"></alert>
    @endforeach
@endif


