<?php

namespace App\Http\Controllers\backend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function general(Request $request)
    {

        if (Setting::where('name', '=', 'phone')->exists()) {
            $Settings = Setting::where('name', '=', 'phone')->first();
            $Setting = $Settings->value;
        } else {
            $Setting = '{
                "book": {
                    "phone": "",
                    "image": "",
                    "price": {
                        "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
                    }
                }
            }';
        }

        // foreach (json_decode($json) as $phone) {
        //     dd($phone->price);
        // }
        return view('backend.administration.general_settings', compact('Setting'));
    }

    public function store_settings(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            if ($key != '' && $value != '') {
                $data = array();
                $data['value'] = is_array($value) ? json_encode($value) : $value;
                $data['updated_at'] = now();
                if ($request->hasFile($key)) {
                    $image = $request->file($key);
                    $name = $key . '.' . $image->getClientOriginalExtension();
                    $path = public_path('uploads/images/');
                    $image->move($path, $name);
                    $data['value'] = $name;
                    $data['updated_at'] = now();
                }
                if (Setting::where('name', $key)->exists()) {
                    Setting::where('name', '=', $key)->update($data);
                } else {
                    $data['name'] = $key;
                    $data['created_at'] = now();
                    Setting::insert($data);
                }
            }
        }
        if (!$request->ajax()) {
            return back()->with('success', _lang('Saved sucessfully.'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Saved sucessfully.')]);
        }
    }
}
