<?php

use Illuminate\Support\Facades\Session;

if ( ! function_exists('_lang')){
	function _lang($string = ''){

		return $string;
	}
}

if ( ! function_exists('get_lang')){
	function get_lang($string = ''){
		$set_lang = Session::get('_lang');
		$default_lang = get_option('language');
		$lang = (($set_lang != '') ? $set_lang : $default_lang);
		return $lang;
	}
}

if ( ! function_exists('get_location')){
    function get_location($ip = ''){
        $json = file_get_contents("https://www.iplocate.io/api/lookup/$ip");
        $details = json_decode($json, true);
        return $details;
    }
}

if ( ! function_exists('getGeneratedToken')){
    function getGeneratedToken($source_url, $signedKey, $userIP)
    {
        //dd($signedKey);
        $key = ENV('FIL_KEY');
        $lifetime = 3600 * 3;
        $stream = $signedKey;
        $ipaddr = $userIP;
        $desync = 300;
        $starttime = time() - $desync;
        $endtime = $starttime + $lifetime;
        $salt = bin2hex(openssl_random_pseudo_bytes(16));
        $hashsrt = $stream . $ipaddr . $starttime . $endtime . $key . $salt;
        $hash = sha1($hashsrt);
        $token = $hash . '-' . $salt . '-' . $endtime . '-' . $starttime;
        $link = $source_url . '?token=' . $token . '&remote=' . $ipaddr;
        return $link;
    }
}

if (!function_exists('buildTree')) {

    function buildTree($object, $currentParent, $url, $currLevel = 0, $prevLevel = -1)
    {
        foreach ($object as $category) {
            if ($currentParent == $category->parent_id) {
                if ($currLevel > $prevLevel) {
                    echo "<ul class='menutree'>";
                }
                if ($currLevel == $prevLevel) {
                    echo "</li>";
                }
                echo '<li> <label class="menu_label" for=' . $category->id . '><a href="' . route($url, $category->id) . '" class="ajax-modal" title="' . _lang('Details') . '">' . $category->name . '</a><a href="' . route($url, $category->id) . '" class="btn btn-warning btn-xs float-right">' . _lang('Edit') . '</a></label>';
                if ($currLevel > $prevLevel) {
                    $prevLevel = $currLevel;
                }
                $currLevel++;
                buildTree($object, $category->id, $url, $currLevel, $prevLevel);
                $currLevel--;
            }
        }
        if ($currLevel == $prevLevel) {
            echo "</li> </ul>";
        }
    }
}

if (!function_exists('settings')) {
    function settings($name, $value = '')
    {
        $setting = \App\Setting::where('name', $name)->first();
        if (! $setting) {
            $setting = new \App\Setting();
            $setting->name = $name;
            $setting->value = $value;
            $setting->save();
            return $setting;
        }

        $setting->value = $value;
        $setting->save();
        return $setting;
    }
}

if (!function_exists('get_app_content')) {
    function get_app_content($name, $optional = '')
    {
        $app = App\Models\AppContent::where('app_id', session('selected_app_id'))->where('name', $name)->first();
        if ($app) {
            return $app->value;
        }

        return $optional;
    }
}

if (!function_exists('create_option')) {
    function create_option($table = '', $value = '', $show = '', $selected = '', $where = null)
    {
        $options = '';
        $condition = '';

        if($where != NULL){
            $condition .= "WHERE ";
            foreach( $where as $key => $v ){
                $condition.= $key . "'" . $v . "'";
            }
        }

        if (is_array($show)){
            $concatenation = $show[0];
            array_shift($show);
            $p = implode(",", $show);
            $results = DB::select("SELECT $value, (CONCAT_WS('$concatenation', $p)) AS d FROM $table $condition");
        }else{
            $results = DB::select("SELECT * FROM $table $condition");
        }

        foreach($results as $data){
            if($selected == $data->$value){
                if(! is_array($show)){
                    $options .= "<option value='" . $data->$value . "' selected>" . ucwords($data->$show) . "</option>";
                }else{
                    $options .= "<option value='" . $data->$value . "' selected>" . ucwords($data->d) . "</option>";
                }
            }else{
                if(! is_array($show)){
                    $options .= "<option value='" . $data->$value . "'>" . ucwords($data->$show) . "</option>";
                }else{
                    $options .= "<option value='" . $data->$value . "'>" . ucwords($data->d) . "</option>";
                }
            }
        }

        echo $options;
    }
}

if (!function_exists('create_option2')) {
    function create_option2($table = '', $value = '', $show = '', $selected = '', $where = null)
    {
        $options = '';
        $condition = '';

        if($where != NULL){
            $condition .= "WHERE ";
            foreach( $where as $key => $v ){
                $condition.= $key . "'" . $v . "'";
            }
        }

        if (is_array($show)){
            $concatenation = $show[0];
            array_shift($show);
            $p = implode(",", $show);
            $results = DB::select("SELECT $value, (CONCAT_WS('$concatenation', $p)) AS d FROM $table $condition");
        }else{
            $results = DB::select("SELECT * FROM $table $condition");
        }

        foreach($results as $data){
            if($selected == $data->$value){
                if(! is_array($show)){
                    $options .= "<option value='" . $data->$value . "' selected>" . ucwords($data->$show) . "</option>";
                }else{
                    $options .= "<option value='" . $data->$value . "' selected>" . ucwords($data->d) . "</option>";
                }
            }else{
                if(! is_array($show)){
                    $options .= "<option value='" . $data->$value . "'>" . ucwords($data->$show) . "</option>";
                }else{
                    $options .= "<option value='" . $data->$value . "'>" . ucwords($data->d) . "</option>";
                }
            }
        }

        echo $options;
    }
}

if (!function_exists('time_elapsed_string')) {
    function time_elapsed_string($datetime, $full = false)
    {
        $now = new \DateTime;
        $ago = new \DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hour',
            'i' => 'minute',
            's' => 'second',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) {
            $string = array_slice($string, 0, 1);
        }

        return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
}

if (!function_exists('get_table')) {
    function get_table($table, $where = null, $order = 'DESC')
    {
        if ($where != null) {
            $results = DB::table($table)->where($where)->orderBy('id', $order)->get();
        } else {
            $results = DB::table($table)->orderBy('id', $order)->get();
        }
        return $results;
    }
}

if (!function_exists('get_logo')) {
    function get_logo()
    {
        $logo = get_option("logo");
        if ($logo == '') {
            return asset("public/default/default-logo.png");
        }
        return asset("public/uploads/images/$logo");
    }
}

if (!function_exists('get_icon')) {
    function get_icon()
    {
        $icon = get_option("icon");

        if ($icon == '') {
            return asset("public/default/default-icon.png");
        }
        return asset("public/uploads/images/$icon");
    }
}

if (!function_exists('get_option')) {
    function get_option($name, $optional = '')
    {
        $setting = DB::table('settings')->where('name', $name)->get();
        if (!$setting->isEmpty()) {
            return $setting[0]->value;
        }
        return $optional;

    }
}

if (!function_exists('file_settings')) {
    function file_settings($max_upload_size = null, $file_type_supported = null)
    {
        if (!$max_upload_size) {
            $max_upload_size = (get_option('max_upload_size', 5) * 1024);
        }
        if (!$file_type_supported) {
            $file_type_supported = get_option('file_type_supported', 'PNG,JPG,JPEG,png,jpg,jpeg');
        }
        return "|max:$max_upload_size|mimes:$file_type_supported";
    }
}

if (!function_exists('status')) {
    function status($label, $badge, $raw = true)
    {
        return '<span class="badge badge-' . $badge . '">' . $label . '</span>';
    }
}

if (!function_exists('counter')) {
    function counter($table, $where = null)
    {
        if ($where) {
            $count = DB::table($table)->where($where)->count('id');
        } else {
            $count = DB::table($table)->count('id');
        }
        return $count;
    }
}

// if (!function_exists('timezone_list')) {
//     function timezone_list()
//     {
//         $zones_array = array();
//         $timestamp = time();
//         foreach (timezone_identifiers_list() as $key => $zone) {
//             date_default_timezone_set($zone);
//             $zones_array[$key]['ZONE'] = $zone;
//             $zones_array[$key]['GMT'] = 'UTC/GMT ' . date('P', $timestamp);
//         }
//         return $zones_array;path
//     }

// }

if (!function_exists('create_timezone_option')) {

    function create_timezone_option($old = "")
    {
        $option = "";
        $timestamp = time();
        foreach (timezone_identifiers_list() as $key => $zone) {
            date_default_timezone_set($zone);
            $selected = $old == $zone ? "selected" : "";
            $option .= '<option value="' . $zone . '"' . $selected . '>' . 'GMT ' . date('P', $timestamp) . ' ' . $zone . '</option>';
        }
        echo $option;
    }

}

if (!function_exists('get_country_list')) {
    function get_country_list($selected = '')
    {
        if ($selected == "") {
            echo file_get_contents(app_path() . '/Helpers/country.txt');
        } else {
            $pattern = '<option value="' . $selected . '">';
            $replace = '<option value="' . $selected . '" selected="selected">';
            $country_list = file_get_contents(app_path() . '/Helpers/country.txt');
            $country_list = str_replace($pattern, $replace, $country_list);
            echo $country_list;
        }
    }
}

if (!function_exists('load_language')) {
    function load_language($active = '')
    {
        $path = resource_path() . "/_lang";
        $files = scandir($path);
        $options = "";
        foreach ($files as $file) {
            $name = pathinfo($file, PATHINFO_FILENAME);
            if ($name == "." || $name == "" || $name == "language") {
                continue;
            }
            $selected = "";
            if ($active == $name) {
                $selected = "selected";
            } else {
                $selected = "";
            }
            $options .= "<option value='$name' $selected>" . ucwords($name) . "</option>";
        }
        echo $options;
    }
}

if (!function_exists('get_language_list')) {
    function get_language_list()
    {
        $path = resource_path() . "/_lang";
        $files = scandir($path);
        $array = array();

        $default = get_option('language');
        $array[] = $default;

        foreach ($files as $file) {
            $name = pathinfo($file, PATHINFO_FILENAME);
            if ($name == "." || $name == "" || $name == "language" || $name == $default) {
                continue;
            }

            $array[] = $name;

        }
        return $array;
    }
}