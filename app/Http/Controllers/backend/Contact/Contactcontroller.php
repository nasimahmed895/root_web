<?php

namespace App\Http\Controllers\backend\Contact;

use DataTables;
use App\Models\contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class Contactcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {

        $contact = ContactUs::latest()->get();
        if ($request->ajax()) {
            return Datatables::of($contact)
                ->addIndexColumn()
                ->addColumn('file', function ($fils) {
                    if ($fils->image != '') {
                        return '<a href="' . url('root/download',  $fils->image) . '"  title="' . $fils->image . '" >
                   <img src="' . asset('/public/backend/assets/img/file.png') . '" alt="" srcset=""  style="width: 20px">
                    </a>';
                    } else {
                        return  ' <a href="' . url('root/download',  $fils->image) . '" style="pointer-events: none" >
                        <img src="' . asset('/public/backend/assets/img/file.png') . '" alt="" srcset=""  style="width: 20px">
                         </a>';
                    }
                })
                ->addColumn('link', function ($contact) {
                    if ($contact->link != '') {
                        return '<a href="' .  $contact->link . '" target="_blank" rel=""  title="' . $contact->link . '" ><img src="' . asset('/public/backend/assets/img/open.png') . '" alt="" srcset="" style="width: 20px"></a>';
                    } else {
                        return  '<a href="' .  $contact->link . '" target="_blank" rel="noopener noreferrer" style="pointer-events: none" title="No link Provided"><img src="' . asset('/public/backend/assets/img/open.png') . '" alt="" srcset="" style="width: 20px"></a>';
                    }
                })
                ->addColumn('meeting', function ($contact) {
                    return ($contact->meeting) ? $contact->meeting : 'No Meeting';
                })
                ->addColumn('action', function ($contact) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item ajax-modal" href="' . route('contact-us.show', $contact->id) . '"><i class="fas fa-envelope"></i> message </a></li>
                                <li><form action="' . route('contact-us.destroy', $contact->id) . '" method="post" class="ajax-delete">'
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
                ->rawColumns(['action', 'file', 'link', 'meeting'])
                ->make(true);
        }
        return view('backend.pages.contact_us', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, request $request)
    {
        $contact = ContactUs::find($id);
        if (!$request->ajax()) {
            return view('backend.pages.massage', compact('contact'));
        } else {
            return view('backend.pages.massage', compact('contact'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, request $request)
    {
        ContactUs::find($id)->delete();
        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }

    public function download($image)
    {

        // return $image;
        $file_path = public_path('uploads/images/contact/' . $image);
        // return Response::download($file_path);
        return response()->download($file_path);
    }
    public function chack()
    {
        return view('backend.pages.multi_datatable');
    }
}
