<?php

namespace App\Http\Controllers;

use DataTables;
use Illuminate\Http\Request;
use App\Models\OfficeAddress;
use App\Models\Address as ModelsAddress;

class Address extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        $address = OfficeAddress::get();

        if ($request->ajax()) {
            return Datatables::of($address)
                ->addIndexColumn()
                ->addColumn('status', function ($address) {
                    return $address->status == 1 ? status(_lang('Active'), 'success') : status(_lang('In-Active'), 'danger');
                })
                ->addColumn('image', function ($address) {
                    return ' <div class="d-flex px-2 py-1">
                            <div>
                            <img src="' . asset('public/' . $address->image) . '" class="avatar avatar-sm me-3" alt="user1">
                            </div>
                        </div>';
                })
                ->addColumn('action', function ($address) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item ajax-modal" href="' . route('address.edit', $address->id) . '"><i class="fas fa-edit"></i> Edit </a></li>
                                <li>
                                <form action="' . route('address.destroy', $address->id) . '" method="post" class="ajax-delete">'
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
                ->rawColumns(['action', 'status', 'image'])
                ->make(true);
        }
        return view('backend.address.index', compact('address'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(request $request)
    {
        if (!$request->ajax()) {
            return view('backend.address.create');
        } else {
            return view('backend.address.model.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [

            'address' => 'required',
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
            'image' => 'required',

        ]);
        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $address = new OfficeAddress();
        $address->address = $request->address;
        $address->title = $request->title;
        $address->start_time = $request->start_time;
        $address->end_time = $request->end_time;
        $address->phone = $request->phone;
        $address->country_code = $request->country_code;
        $address->status = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/images/address/'), $filename);
            $address->image = 'public/uploads/images/address/' . $filename;
        }
        $address->save();
        if (!$request->ajax()) {
            return redirect(route('address.index'))->with('success', _lang('Address has been added.'));
        } else {
            return response()->json(['result' => 'success']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $address = OfficeAddress::find($id);

        if (!$request->ajax()) {
            return view('backend.address.edit', compact('address'));
        } else {
            return view('backend.address.model.edit', compact('address'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = \Validator::make($request->all(), [

            'address' => 'required',
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'phone' => 'required',
            'image' => 'required',
            'country_code' => 'required',

        ]);

        $address =  OfficeAddress::find($id);
        $address->address = $request->address;
        $address->title = $request->title;
        $address->start_time = $request->start_time;
        $address->end_time = $request->end_time;
        $address->phone = $request->phone;
        $address->country_code = $request->country_code;
        $address->status = $request->status;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/images/address/'), $filename);
            $address->image = 'public/uploads/images/address/' . $filename;
        }
        $address->update();
        if (!$request->ajax()) {
            return redirect(route('address.index'))->with('success', _lang('Address has been Update.'));
        } else {
            return response()->json(['result' => 'success']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(request $request, string $id)
    {
        $address = OfficeAddress::find($id);

        $address->delete();

        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
}
