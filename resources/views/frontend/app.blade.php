@include('frontend.style')
<div class="center_containt_loder " style="width: 100%; ">
    <div class="loder" id="loder">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        {{--  <span class="loging">Loging...</span>  --}}
    </div>
</div>


{{--  @if (Session::has('error'))
    toast('error', '{{ session('error') }}');
@endif
@foreach ($errors->all() as $error)
    toast('error', '{{ $error }}');
@endforeach  --}}
@include('frontend.nave')

@yield('container')

@include('frontend.footer')

@include('frontend.script')

@yield('javascript')
