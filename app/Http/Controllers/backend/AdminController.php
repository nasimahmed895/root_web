<?php

namespace App\Http\Controllers\backend;

use Hash;
use Validator;
use DataTables;
use Carbon\Carbon;
use App\Models\User;
use App\Models\AppModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $User = User::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($User)
                ->addIndexColumn()
                ->addColumn('name', function ($User) {
                    $data = '<div class="d-flex px-2 py-1">
                             <div>';
                    $data .=  ($User->image == '') ? '<img src="' . asset($User->image) . '" class="avatar avatar-sm me-3"
                                alt="user1">' :  '<img src="' . asset('/public/' . $User->image) . '" class="avatar avatar-sm me-3"
                                alt="user1">';


                    $data .=  '</div>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">' . $User->first_name . '' . $User->last_name . '</h6>
                            </div>
                        </div>';
                    return $data;
                })
                ->addColumn('email', function ($User) {
                    return '<div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">' . $User->email . '</h6>
                                </div>
                            </div>';
                })
                ->addColumn('status', function ($User) {
                    $online =  (Cache::has('is_online' . $User->id)) ? '<span class="badge badge-sm bg-gradient-success px-2">Online</span>' : '<span class="badge badge-sm bg-gradient-secondary px-2">Offline</span>';
                    return $online;
                })

                ->addColumn('activ', function ($User) {

                    $activ =  (Cache::has('is_online' . $User->id)) ? '<span class="badge badge-sm bg-gradient-success px-2">Online</span>' : '<span class="badge badge-sm bg-gradient-secondary px-2">Offline</span>';
                    return $activ;
                })

                ->addColumn('action', function ($User) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item ajax-modal" href="' . route('admin.edit', $User->id) . '"><i class="fas fa-edit"></i> Edit </a></li>
                                <li><form action="' . route('admin.destroy', $User->id) . '" method="post" class="ajax-delete">'
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
                ->rawColumns(['action', 'name', 'email', 'status', 'activ'])
                ->make(true);
        }
        return view('backend.admin.index', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        if (!$request->ajax()) {
            return view('backend.admin.create');
        } else {
            return view('backend.admin.model.create');
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

            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string',

        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->user_type = 'admin';

        $user->save();

        if (!$request->ajax()) {
            return redirect('admin/index')->with('success', _lang('Information has been added.'));
        } else {
            return response()->json(['result' => 'success']);
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
        $user = User::find($id);
        if (!$request->ajax()) {
            return view('backend.admin.edit', compact('user'));
        } else {
            return view('backend.admin.model.edit', compact('user'));
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

            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|email',

        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return back()->withErrors($validator)->withInput();
            }
        }

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move(public_path('public/uploads/images/users/'), $filename);
            $user->image = 'public/uploads/images/users/' . $filename;
        }
        $user->save();

        if (!$request->ajax()) {
            return redirect('admin/index')->with('success', _lang('Information has been added.'));
        } else {
            return response()->json(['result' => 'success']);
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
        User::find($id)->delete();
        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
}