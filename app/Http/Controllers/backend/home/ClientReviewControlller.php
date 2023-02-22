<?php

namespace App\Http\Controllers\backend\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;
use DataTables;

class ClientReviewControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        // dd($request->path());
        $client = Client::all();

        if ($request->ajax()) {
            return Datatables::of($client)
                ->addIndexColumn()
                ->addColumn('image', function ($client) {
                    return ' <div class="d-flex px-2 py-1">
                                <div>
                                <img src="' . asset('public/' . $client->image) . '" class="avatar avatar-sm me-3" alt="user1">
                                </div>
                            </div>';
                })
                ->addColumn('action', function ($client) {
                    $action = '<div class="dropdown text-center ">
                                    <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item ajax-modal" href="' . route('client-review.edit', $client->id) . '"><i class="fas fa-edit"></i> Edit </a></li>
                                    <li><form action="' . route('client-review.destroy', $client->id) . '" method="post" class="ajax-delete">'
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
                ->rawColumns(['action', 'image'])
                ->make(true);
        }
        return view('backend.pages.home.client_review.clients', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        if (!$request->ajax()) {
            return view('backend.pages.home.client_review.create');
        } else {
            return view('backend.pages.home.client_review.modal.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [

            'name' => 'required|string',
            'designation' => 'required|string',
            'text' => 'required|string',
            'image' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $client = new Client();

        $client->name = $request->name;
        $client->designation = $request->designation;
        $client->text = $request->text;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/image'), $filename);
            $client->image = 'uploads/images/image/' . $filename;
        }
        $client->save();

        if (!$request->ajax()) {
            return redirect('client-review.index')->with('success', _lang('Information has been added.'));
        } else {
            return response()->json(['result' => 'success', 'message' => 'Information has been added.']);
        }
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
    public function edit($id, request $request)
    {
        $client = Client::find($id);
        if (!$request->ajax()) {
            return view('backend.pages.home.client_review.edit', compact('client'));
        } else {
            return view('backend.pages.home.client_review.modal.edit', compact('client'));
        }
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
        $validator = \Validator::make($request->all(), [

            'name' => 'required|string',
            'designation' => 'required|string',
            'text' => 'required|string',
            // 'image' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $client = Client::find($id);

        $client->name = $request->name;
        $client->designation = $request->designation;
        $client->text = $request->text;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/image'), $filename);
            $client->image = 'uploads/images/image/' . $filename;
        }
        $client->update();

        if (!$request->ajax()) {
            return redirect('client-review.index')->with('success', _lang('Information has been added.'));
        } else {
            return response()->json(['result' => 'success', 'message' => 'Information has been added.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $client = Client::find($id);
        $client->delete();

        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
}