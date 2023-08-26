{{-- check for errors in post submission if more than 0 --}}
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif

{{-- success message --}}
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- error message --}}
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

{{-- information message --}}
@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif
