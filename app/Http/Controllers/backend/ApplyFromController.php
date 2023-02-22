<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Http\Request;
use DataTables;

class ApplyFromController extends Controller
{
    public function index(request $request)
    {

        $apply_form = Applicant::latest()->get();
        //return $apply_form;

        if ($request->ajax()) {
            return Datatables::of($apply_form)
                ->addIndexColumn()
                ->addColumn('file', function ($files) {
                    if ($files->file != '') {
                        return '<a href="' .  url('root/apply-form/download',  $files->file) . '"  title="' . $files->file . '" >
                   <img src="' . asset('/public/backend/assets/img/file.png') . '" alt="" srcset=""  style="width: 20px">
                    </a>';
                    } else {
                        return  ' <a href="' . url('root/apply-form/download',  $files->file) . '" style="pointer-events: none" >
                        <img src="' . asset('/public/backend/assets/img/file.png') . '" alt="" srcset=""  style="width: 20px">
                         </a>';
                    }
                })
                ->addColumn('action', function ($apply_form) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item ajax-modal" href="' . route('apply-form.show', $apply_form->id) . '"><i class="fas fa-envelope"></i> message </a></li>
                                <li><form action="' . route('apply-form.destroy', $apply_form->id) . '" method="post" class="ajax-delete">'
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
                ->rawColumns(['action', 'file'])
                ->make(true);
        }
        return view('backend.pages.apply_form', compact('apply_form'));
    }
    public function show($id, request $request)
    {
        $contact = Applicant::find($id);
        if (!$request->ajax()) {
            return view('backend.pages.massage', compact('contact'));
        } else {
            return view('backend.pages.massage', compact('contact'));
        }
    }
    public function destroy($id, request $request)
    {
        Applicant::find($id)->delete();
        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }
    public function pdf_download($file)
    {

        // return $image;
        $file_path = public_path('uploads/file/application/' . $file);
        // return Response::download($file_path);
        return response()->download($file_path);
    }
    public function chack()
    {
        return view('backend.pages.multi_datatable');
    }
}