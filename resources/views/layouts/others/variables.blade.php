<script type="text/javascript">
	var _url = "{{ url('/') }}";

	var $lang_dashboard = "{{ _lang('Dashboard') }}";
	var $lang_alert_title = "{{ _lang('Are you sure?') }}";
	var $lang_alert_message = "{{ _lang('Once deleted, you will not be able to recover this information !') }}";
	var $lang_confirm_button_text = "{{ _lang('Yes, delete it!') }}";
	var $lang_cancel_button_text = "{{ _lang('Cancel') }}";
	var $lang_no_data_found = "{{ _lang('No Data Found') }}";
	var $lang_showing = "{{ _lang('Showing') }}";
	var $lang_to = "{{ _lang('to') }}";
	var $lang_of = "{{ _lang('of') }}";
	var $lang_entries = "{{ _lang('Entries') }}";
	var $lang_showing_0_to_0_of_0_entries = "{{ _lang('Showing 0 To 0 Of 0 Entries') }}";
	var $lang_show = "{{ _lang('Show') }}";
	var $lang_loading = "{{ _lang('Loading...') }}";
	var $lang_processing = "{{ _lang('Processing...') }}";
	var $lang_search = "{{ _lang('Search') }}";
	var $lang_no_matching_records_found = "{{ _lang('No matching records found') }}";
	var $lang_first = "{{ _lang('First') }}";
	var $lang_last = "{{ _lang('Last') }}";
	var $lang_next = "{{ _lang('Next') }}";
	var $lang_previous = "{{ _lang('Previous') }}";
	var _max_file_uploads = '{{ @ini_get('max_file_uploads') }}';
    var _upload_max_filesize = '{{ substr_replace(@ini_get('upload_max_filesize'), "", -1) }}';
</script>