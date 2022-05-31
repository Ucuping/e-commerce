@extends('frontend.layouts.partials.app')

@section('ajax')
    <div class="content-detached">
        <div class="content-body">
            @yield('content')
        </div>
    </div>
    <script>
        document.title = "{{ $title .' | E - Commerce' }}";
        
        // if(!window.jQuery){
        //     document.body.innerHTML = "";
        //     window.location.reload();
        // }
    </script>

    {{-- @if(isset($mods))
        @if(is_array($mods))
            @foreach($mods as $m)
                <script src="{{ asset('mods/mod_'. $m .'.js') }}"></script>
            @endforeach
        @else
            <script src="{{ asset('mods/mod_'. $mods .'.js') }}"></script>
        @endif
    @endif --}}

    @yield('_js')
    
@endsection