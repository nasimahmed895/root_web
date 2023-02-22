<?php

namespace App\Http\Controllers\frontend;


use Share;
use Validator;
use App\Models\Career;
use App\Models\Client;
use App\Models\Featured;
use App\Models\Applicant;
use App\Models\ContactUs;

use Illuminate\Http\Request;
use function Termwind\render;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class WebController extends Controller
{
    public function index()
    {
        $featured = Cache::rememberForever('featured', function () {
            return Featured::all();
        });
        $client = Cache::rememberForever('client', function () {
            return   Client::all();
        });
        return view('frontend.pages.index', compact('featured', 'client'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }
    public function case_study()
    {
        return view('frontend.pages.Casestudy');
    }
    public function case_study_view()
    {
        return view('frontend.pages.casestydyview.view');
    }
    public function how_we_work()
    {
        return view('frontend.pages.howwework');
    }
    public function project_base()
    {
        return view('frontend.pages.projectbase');
    }
    public function dedicated_team()
    {
        return view('frontend.pages.hirededicatedteam');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function career()
    {
        $career = Cache::rememberForever('career', function () {
            return Career::where("status", '=', '1')->get();
        });
        return view('frontend.pages.career', compact('career'));
    }
    public function job_details(request $request, $id)
    {
        $current = URL::current();
        $career = Career::where("slug", '=', $id)->first();
        return view('frontend.pages.job_details', compact('career', 'current'));
    }
    public function basicInformation(request $request, $id)
    {
        return view('frontend.pages.basicInformation', compact('id'));
    }
    public function apply_now(request $request)
    {

        $validator = \Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $Applicant = new Applicant();
        $Applicant->name = $request->name;
        $Applicant->email = $request->email;
        $Applicant->number = $request->number;
        //$Applicant->file = $request->file;
        $Applicant->application = $request->application;
        $Applicant->slug = $request->slug;
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = rand() .  $file->getClientOriginalName();
            $file->move(public_path('uploads/file/application'), $filename);
            $Applicant->file = $filename;
        }
        $Applicant->save();

        if (!$request->ajax()) {
            return redirect('/')->with('success', _lang('Your application has been submitted successfully.'));
        } else {
            return response()->json(['result' => 'success', 'redirect' => route('index'), 'message', _lang('Your application has been submitted successfully.')]);
        }
    }
    public function uploadToServer(request $request)
    {
        $name = ' /^[A-Za-z .-]+$/';
        $email_valid = '/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
        $validator = \Validator::make($request->all(), [

            'name' => 'required|regex:' . $name,
            'email' => 'required|email|regex:' . $email_valid,
            'message' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $contactUs = new ContactUs();
        $contactUs->name = $request->name;
        $contactUs->email = $request->email;
        $contactUs->link = $request->link;
        $contactUs->message = $request->message;
        $contactUs->meeting = $request->meeting;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = rand() .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/contact'), $filename);
            $contactUs->image =  $filename;
        }
        $contactUs->save();

        if (!$request->ajax()) {
            return redirect('/')->with('success', _lang('Your application has been submitted successfully.'));
        } else {
            return response()->json(['result' => 'success',  'redirect' => route('index'), 'message' => 'Your application has been submitted successfully.']);
        }
    }
}