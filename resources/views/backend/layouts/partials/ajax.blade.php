@extends('backend.layouts.partials.app')

@section('ajax')
    <div class="content-header row">
    </div>
    <div class="content-body">
        @yield('content')
    </div>
    <script>
        document.title = "{{ $title . ' | E - Commerce' }}";
    </script>

    @yield('_js')
@endsection