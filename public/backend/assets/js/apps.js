(function ($) {
    "use strict";

    //preloader
    setTimeout(function () {
        $('#preloader').fadeOut('slow');
    }, 400)

    //load plugins
    //select2
    // $("select.select2").select2();

    // $(".select2-image").select2({
    //     templateResult: formatState,
    //     templateSelection: formatState
    // });

    //dropify
    $('.dropify').dropify();


    //datepicker
    $(document).on('focus', '.datepicker', function () {
        $(this).datepicker({
            format: 'yyyy-mm-dd'
        }).on('changeDate', function () {
            $(this).datepicker('hide');
            $("#main_modal").css("overflow-y", "auto");
        });
    });

    //monthpicker
    $(document).on('focus', '.monthpicker', function () {
        $(this).datepicker({
            format: 'yyyy-mm'
        }).on('changeDate', function () {
            $(this).datepicker('hide');
            $("#main_modal").css("overflow-y", "auto");
        });
    });

    // flatpickr()

    //validate
    validate()

    // $('.summernote').summernote({
    //     height: 400
    // });




    $("input:required, select:required, textarea:required").prev().append('<span class="required"> *</span>');
    // $(".dropify:required").parent().prev().append('<span class="required"> *</span>');

    $('body').on('hidden.modal', '.modal', function () {
        $(this).removeData('bs.modal');
        //$(this).removeData();
    });

    $("#main_modal").on('show.bs.modal', function () {
        $('#main_modal').css("overflow-y", "hidden");
    });

    $("#main_modal").on('shown.bs.modal', function () {
        setTimeout(function () {
            $('#main_modal').css("overflow-y", "auto");
        }, 1000);
    });


    //Ajax Modal Function
    $(document).on("click", ".ajax-modal", function () {
        var link = $(this).data("href");
        if (typeof link == 'undefined') {
            link = $(this).attr("href");
        }

        var title = $(this).data("title");
        var dis = this;

        $.ajax({
            url: link,
            beforeSend: function () {
                $("#preloader").css("display", "block");
            }, success: function (data) {
                $("#preloader").css("display", "none");
                $('#main_modal .modal-title').html(title);
                $('#main_modal .modal-body').html(data);
                $("#main_modal .alert-secondary").addClass('d-none');
                $("#main_modal .alert-danger").addClass('d-none');
                $('#main_modal').modal('show');
                // //Select2
                // $("#main_modal select.select2").select2({
                //     dropdownParent: $("#main_modal")
                // });

                // //Auto Selected
                if ($("#main_modal [data-selected]").length) {
                    $('#main_modal [data-selected]').each(function (i, obj) {
                        $(this).val($(this).data('selected')).trigger('change');
                    })
                }
                // //validate
                validate();

                // $(".dropify").dropify();
                $("#main_modal input:required, #main_modal select:required, #main_modal textarea:required").prev().append('<span class="required"> *</span>');
                $("#main_modal .ajax-screen-submit input:required, #main_modal .ajax-screen-submit select:required, #main_modal .ajax-screen-submit textarea:required").closest(".form-group").find('.control-label').append("<span class='required'> *</span>");
            },
            error: function (request, status, error) {
                console.log(request.responseText);
            }
        });

        return false;
    });

    $(document).on("submit", ".ajax-submit", function () {
        var link = $(this).attr("action");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: link,
            data: new FormData(this),
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            // beforeSend: function () {
            //     $("#preloader").css("display", "block");
            //     $("#main_modal .alert").css("display", "none");
            // },
            success: function (data) {
                $("#preloader").css("display", "none");
                var json = JSON.parse(data);

                if (json['result'] == "success") {
                    if (typeof json['redirect'] != 'undefined' && json['redirect'] != '') {
                        window.setTimeout(function () { window.location.replace(json['redirect']) }, 1000);
                        toast('success', json['message']);
                        return true;
                    }

                    if ($('#data-table').length) {
                        $('#data-table').DataTable().ajax.reload(null, false);
                    }

                    $("#main_modal .alert-danger").css("display", "none");
                    toast('success', json['message']);
                    $('#main_modal').modal('hide');
                } else {
                    console.log(json['message']);
                    jQuery.each(json['message'], function (i, val) {
                        $("#main_modal .alert-danger").html("<p>" + val + "</p>");
                    });
                    $("#main_modal .alert-success").css("display", "none");
                    $("#main_modal .alert-danger").css("display", "block");
                }
            }
        });
        return false;
    });

    //Ajax Non Modal Submit
    $(".ajax-submit2").each(function () {
        $(this).validate({
            ignore: [],
            submitHandler: function (form) {
                var link = $(form).attr("action");
                $.ajax({
                    method: "POST",
                    url: link,
                    data: new FormData(form),
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function () {
                        $("#preloader").css("display", "block");
                    }, success: function (data) {
                        $("#preloader").css("display", "none");
                        var json = JSON.parse(data);
                        if (json['result'] == "success") {
                            if (typeof json['redirect'] != 'undefined' && json['redirect'] != '') {
                                setTimeout(function () {
                                    window.location.replace(json['redirect']);
                                }, 1000);
                            }
                            toast('success', json['message']);
                        } else {
                            jQuery.each(json['message'], function (i, val) {
                                toast('error', val);
                            });
                        }
                    }
                });
                return false;
            }, invalidHandler: function (form, validator) { },
            errorPlacement: function (error, element) { }
        });
    });

    // delete confirmation
    $(document).on('click', '.btn-remove', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#1bcfb4',
            cancelButtonColor: '#fe7c96',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.value) {
                var link = $(this).attr('href');
                if (typeof link !== 'undefined' && link !== '') {
                    window.location.href = link;
                } else {
                    $(this).closest('form').submit();
                }
            }
        })
    });

    //Ajax Delete
    $(document).on("submit", ".ajax-delete", function () {
        var dis = this;
        var link = $(dis).attr("action");
        $.ajax({
            method: "POST",
            url: link,
            data: new FormData(dis),
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $("#preloader").css("display", "block");
            }, success: function (data) {
                $("#preloader").css("display", "none");
                var json = JSON.parse(data);
                if (json['result'] == 'success') {
                    if ($('#data-table').length) {
                        $('#data-table').DataTable().ajax.reload(null, false);
                    } else {
                        $(dis).closest('tr').remove();
                    }
                    toast('success', json['message']);
                } else {
                    toast('error', json['message']);
                }
            }
        });
        return false;
    });

    //Auto Selected
    if ($("[data-selected]").length) {
        $('[data-selected]').each(function (i, obj) {
            $(this).val($(this).data('selected')).change();;
        })
    }

    if ($(".data-table").length) {
        $('.data-table').each(function (i, obj) {
            var table = $(this).DataTable({
                responsive: true,
                "bAutoWidth": false,
                "ordering": false,
                "lengthChange": false,
                "language": {
                    "decimal": "",
                    // "emptyTable": $lang_no_data_found,
                    // "info": $lang_showing + " _START_ " + $lang_to + " _END_ " + $lang_of + " _TOTAL_ " + $lang_entries,
                    // "infoEmpty": $lang_showing_0_to_0_of_0_entries,
                    // "infoFiltered": "(filtered from _MAX_ total entries)",
                    // "infoPostFix": "",
                    // "thousands": ",",
                    // "lengthMenu": $lang_show + " _MENU_ " + $lang_entries,
                    // "loadingRecords": $lang_loading,
                    // "processing": $lang_processing,
                    // "search": $lang_search,
                    // "zeroRecords": $lang_no_matching_records_found,
                    // "paginate": {
                    //     "first": $lang_first,
                    //     "last": $lang_last,
                    //     "next": $lang_next,
                    //     "previous": $lang_previous
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
            });
        });
    }

    //General Settings page
    if ($("#mail_type").val() == "mail") {
        $(".smtp").prop("disabled", true);
    }

    $(document).on("change", "#mail_type", function () {
        if ($(this).val() == "mail") {
            $(".smtp").prop("disabled", true);
        } else {
            $(".smtp").prop("disabled", false);
        }
    });

    //product category page
    $('#category-name').keyup(function () {
        var name = $(this).val();
        var slug = name.toLowerCase().replace(/\s/g, '-')
        $('#category-slug').val(slug);
    });

    //taxes page
    $(document).on('click', '.add-new-rate', function () {
        var row = $(".repeat-rate").clone().removeClass("repeat-rate");
        // $(row).find('select').select2();
        $(this).closest('.row').find('tbody').append(row);
    });

    $(document).on('click', '.remove-rate', function () {
        $(this).closest('tr').remove();
    });

})(jQuery);

function toast(result, message) {
    $.toast({
        heading: result,
        text: message,
        showHideTransition: 'slide',
        icon: result,
        position: 'top-right'
    });
}

function validate() {
    //Validation Form
    $(".validate").validate({
        submitHandler: function (form) {
            form.submit();
        }, invalidHandler: function (form, validator) { },
        errorPlacement: function (error, element) { }
    });
}

//start show and hide based on parent category
var iconVal = $('.icon__picker').data('icon');
$('input[name=icon]').val(iconVal);
$('#parent_cat_id').on('change', function () {
    if ($(this).val() != '') {
        $('#thumb-icon-div').css('display', 'none');
        $('input[name=thumbnail]').prop('required', false);
        $('input[name=icon]').val('');
        $('input[name=thumbnail]').val('');
    } else {
        $('#thumb-icon-div').css('display', 'block');
        $('input[name=thumbnail]').prop('required', true);
        $('input[name=icon]').val('empty');
    }
});

// function flatpickr() {
//     //flatpickr
//     var flatpickr_config = {
//         enableTime: true,
//         dateFormat: "Y-m-d H:i",
//         noCalendar: false,
//         altFormat: "Y-m-d H:i",
//         altInput: true,
//         allowInput: false,
//         time_24hr: false,
//         onChange: [
//             function (selectedDates, dateStr, instance) {
//                 //...
//                 this._selDateStr = dateStr;
//             },
//         ],
//         onClose: [
//             function (selDates, dateStr, instance) {
//                 if (this.allowInput && this._input.value && this._input.value !== this._selDateStr) {
//                     this.setDate(this.altInput.value, false);
//                 }
//             }
//         ]
//     };

//     //flatpickr
//     // $(".flatpickr").flatpickr(flatpickr_config);
// }

function formatState(opt) {
    if (!opt.id) {
        return opt.text.toUpperCase();
    }

    var optimage = $(opt.element).attr('data-image');
    console.log(optimage)
    if (!optimage) {
        return opt.text.toUpperCase();
    } else {
        var $opt = $(
            '<span><img src="' + optimage + '" width="30px" height="30px" style="margin-right: 10px;    border-radius: 10px;" /> ' + opt.text.toUpperCase() + '</span>'
        );
        return $opt;
    }
};

//end show and hide based on parent category


