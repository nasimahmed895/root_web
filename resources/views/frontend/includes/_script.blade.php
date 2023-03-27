<script src="{{ asset('public/frontend/plugin/js/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/plugin/js/popper.min.js') }}"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="{{ asset('public/frontend/plugin/js/bootstrap.min.js') }}"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="{{ asset('public/frontend/plugin/js/bootstrap.bundle.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('/public/frontend/plugin/multi-animated-counter.js') }}"></script>
<script src="{{ asset('public/frontend/plugin/slick/slick.js') }}"></script>

@if (Route::is('contact_us'))
    <script src="{{ asset('public/frontend/plugin/jquery.datetimepicker.full.min.js') }}"></script>
@endif

<script src="{{ asset('public/frontend/js/script.js') }}"></script>
<!-- Dropify  -->
<script src="{{ asset('public/backend/assets/plugins/dropify/dropify.min.js') }}"></script>
<!-- Toster  -->
<script src="{{ asset('public/backend/assets/plugins/toastr/toastr.js') }}"></script>

<script>
    {{--  window.onload = function() {
        $('div#loader').fadeOut("slow");
    }  --}}
    setTimeout(() => {
        $('div#loader').fadeOut("slow");
    }, 1000);

    @if (Route::is('contact_us'))
        function toast(result, message) {
            $.toast({
                heading: result,
                text: message,
                showHideTransition: 'slide',
                icon: result,
                position: 'top-right'
            });
        }
    @endif
    @if (Session::has('success'))
        toast('success', '{{ session('success') }}');
    @endif

    @if (Session::has('error'))
        toast('error', '{{ session('error') }}');
    @endif

    @foreach ($errors->all() as $error)
        toast('error', '{{ $error }}');
    @endforeach
</script>
