<?php

namespace App\Http\Controllers\backend\home;

use Validator;
use DataTables;
use App\Models\User;
use App\Models\Featured;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Client;

class FeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $featured = Featured::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($featured)
                ->addIndexColumn()
                ->addColumn('image', function ($featured) {

                    return ' <div class="d-flex px-2 py-1">
                            <div>
                            <img src="' . asset('public/' . $featured->image) . '" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                        </div>';
                })
                ->addColumn('action', function ($featured) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item ajax-modal" href="' . route('featured.edit', $featured->id) . '"><i class="fas fa-edit"></i> Edit </a></li>
                                <li><form action="' . route('featured.destroy', $featured->id) . '" method="post" class="ajax-delete">'
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
        return view('backend.pages.home', compact('featured'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        if (!$request->ajax()) {
            return view('backend.pages.home.featured.create');
        } else {
            return view('backend.pages.home.featured.modal.create');
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

            'heading' => 'required|string',
            'text' => 'required|string|max:191',
            'image' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $Featured = new Featured();

        $Featured->heading = $request->heading;
        $Featured->text = $request->text;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/image'), $filename);
            $Featured->image = 'uploads/images/image/' . $filename;
        }
        $Featured->save();

        if (!$request->ajax()) {
            return redirect()->route('featured.index')->with('success', _lang('Information has been added.'));
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
        return view('backend.pages.home.featured.table');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, request $request)
    {
        $featured = Featured::find($id);
        if (!$request->ajax()) {
            return view('backend.pages.home.featured.edit', compact('featured'));
        } else {
            return view('backend.pages.home.featured.modal.edit', compact('featured'));
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

            'heading' => 'required|string',
            'text' => 'required|string|max:191',
            // 'image' => 'required',


        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $Featured = Featured::find($id);

        $Featured->heading = $request->heading;
        $Featured->text = $request->text;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' .  $file->getClientOriginalName();
            $file->move(public_path('uploads/images/image'), $filename);
            $Featured->image = 'uploads/images/image/' . $filename;
        }
        $Featured->update();

        if (!$request->ajax()) {
            return redirect()->route('featured.index')->with('success', _lang('Information has been update.'));
        } else {
            return response()->json(['result' => 'success', 'message' => 'Information has been update.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, request $request)
    {
        $user = Featured::find($id);
        $user->delete();

        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
}