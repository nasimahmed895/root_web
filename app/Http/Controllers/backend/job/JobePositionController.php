<?php

namespace App\Http\Controllers\backend\job;

use DataTables;
use App\Models\Career;
use App\Models\ContactUs;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $contact = Career::latest()->get();
        // return $contact;
        if ($request->ajax()) {
            return Datatables::of($contact)
                ->addIndexColumn()

                ->addColumn('status', function ($contact) {
                    return $contact->status == 1 ? status(_lang('Active'), 'success') : status(_lang('In-Active'), 'danger');
                })
                ->addColumn('action', function ($contact) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item " href="' . route('job-post.edit', $contact->id) . '"><i class="fas fa-edit"></i> Edit </a></li>
                                <li><form action="' . route('job-post.destroy', $contact->id) . '" method="post" class="ajax-delete">'
                        . csrf_field()
                        . method_field('DELETE')
                        . '<button type="button" class="btn-remove dropdown-item">
                                                <i class="fas fa-trash-alt"></i>
                                                ' . _lang('Delete') . '
                                            </button>
                                        </form></li>
                                </ul>
                            </div>';




                    return $action;
                })
                ->setRowData([
                    'data-class' => 'text-center',
                ])
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('backend.job_position.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.job_position.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $validator = \Validator::make($request->all(), [

            'title' => 'required|string|max:191',
            'company_name' => 'required',
            'location' => 'required',
            'vacancy' => 'required',
            'address' => 'required',
            'work_level' => 'required',
            'experience' => 'required',
            'job_time' => 'required',
            'salary' => 'required',
            'overview' => 'required',
            'requirements' => 'required',
            'overview_list' => 'required',
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $overview_lists = [];
        foreach ($request->overview_list as $key => $value) {
            if ($value != null) {
                $overview_lists[] = [
                    'list' => $value,
                ];
            }
        }

        $job = new Career();
        $job->title = $request->title;
        $job->slug = Str::slug($request->title, '-') . '-' . uniqid();
        $job->company_name = $request->company_name;
        $job->location = $request->location;
        $job->vacancy = $request->vacancy;
        $job->date =  \Carbon\Carbon::parse($request->date)->timestamp;
        $job->address = $request->address;
        $job->work_level = $request->work_level;
        $job->experience = $request->experience;
        $job->job_time = $request->job_time;
        $job->salary = $request->salary;
        $job->overview = $request->overview;
        $job->requirements = $request->requirements;
        $job->overview_list =  json_encode($overview_lists);
        $job->status = $request->status;
        $job->save();

        return redirect('job-post/index')->with('success', _lang('Information has been added success.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $id;
        $career = Career::find($id);
        return view('backend.job_position.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->input();
        $validator = \Validator::make($request->all(), [

            'title' => 'required|string|max:191',
            'company_name' => 'required',
            'location' => 'required',
            'vacancy' => 'required',
            'address' => 'required',
            'work_level' => 'required',
            'experience' => 'required',
            'job_time' => 'required',
            'salary' => 'required',
            'overview' => 'required',
            'requirements' => 'required',
            'overview_list' => 'required',
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $overview_lists = [];
        foreach ($request->overview_list as $key => $value) {
            if ($value != null) {
                $overview_lists[] = [
                    'list' => $value,
                ];
            }
        }

        $job =  Career::find($id);
        $job->title = $request->title;
        $job->slug = Str::slug($request->title, '-') . '-' . uniqid();
        $job->company_name = $request->company_name;
        $job->location = $request->location;
        $job->vacancy = $request->vacancy;
        $job->date =  \Carbon\Carbon::parse($request->date)->timestamp;
        $job->address = $request->address;
        $job->work_level = $request->work_level;
        $job->experience = $request->experience;
        $job->job_time = $request->job_time;
        $job->salary = $request->salary;
        $job->overview = $request->overview;
        $job->requirements = $request->requirements;
        $job->overview_list =  json_encode($overview_lists);
        $job->status = $request->status;
        $job->update();

        return redirect(route('job-post.index'))->with('success', _lang('Information has been added success.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(request $request, $id)
    {
        Career::find($id)->delete();
        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
}