@if(session()->has('success'))
    {{ session('success') }}
@endif

@if(session()->has('error'))
    {{ session('error') }}
@endif

@if(session()->has('info'))
    {{ session('info') }}
@endif

@if($error->any())
    @foreach ($errors->all() as $erro)
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
        @break
    @endforeach
@endif