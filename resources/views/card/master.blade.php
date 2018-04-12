@include('layouts.header')

<div class="container-fluid margin-top-60">
    <div class="row">

        {{-- Side bar --}}
        <div class="col-md-3">
            @include('layouts.sidebar')
        </div>

        {{-- Content section --}}
        <div class="col-md-9">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')