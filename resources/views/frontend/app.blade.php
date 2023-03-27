<!DOCTYPE html>
<html lang="en-US">

{{-- Head --}}
@include('frontend.includes._head')

<body>

    {{-- Loader --}}
    <div id="loader">
        <h2 id="loader-text" data-text="ROOTDEVS.">ROOT<span>DEVS</span><span>.</span></h2>
    </div>

    {{-- Navigation Bar --}}
    @include('frontend.includes._navbar')

    {{-- Main Content --}}
    @yield('container')

    {{-- Footer --}}
    @include('frontend.includes._footer')
    {{-- Script --}}
    @include('frontend.includes._script')

    @yield('js-script')


</body>

</html>
