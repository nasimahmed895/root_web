{{--  yajra datatable  --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<!-- Dropify  -->
<script src="{{ asset('/public/backend/assets/plugins/dropify/dropify.min.js') }}"></script>
<!-- Dropify  -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="{{ asset('/public/backend/assets/js/app.js') }}"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
{{--  yajra datatable  --}}
<!-- Toastr -->
<script src="{{ asset('/public/backend/assets/plugins/toastr/toastr.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('public/backend/assets/plugins/select2/select2.js') }}"></script>

<script src="{{ asset('/public/backend/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('/public/backend/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>


<script>
    //dropify
    let loder = document.querySelector('#loder');
    window.onload = function() {
        loder.style.display = 'none ';
    }
    $('.dropify').dropify();

    @if (!Request::is('dashboard'))
        $(".page-title").text($(".card-title").first().text());
        $('title').append(' | ' + $(".card-title").first().text());
    @else
        $('title').append(' | '.$lang_dashboard);
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

<script src="{{ asset('/public/backend/assets/js/script.js') }}"></script>


</body>

</html>
