<?php

namespace App\Http\Controllers\backend;

use DataTables;
use App\Models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ApplyFromController extends Controller
{
    public function index(request $request)
    {

        $apply_form = Applicant::orderBy('id', 'desc');
        //return $apply_form;

        if ($request->ajax()) {
            return Datatables::of($apply_form)
                ->addIndexColumn()
                ->addColumn('file', function ($files) {

                    return '<a target="_blank" href="../public/uploads/file/application/' . $files->file . '"  title="' . $files->file . '" >
                    <button type="button" class="btn btn-outline-secondary"> <i class="far fa-eye"></i></button>
                           
                        </a>';
                })
                ->addColumn('action', function ($apply_form) {
                    $action = '<div class="dropdown text-center ">
                                <button class="btn-sm btn btn-success dropdown-toggle m-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="' . url('root/apply-form/download',  $apply_form->file) . '" target="_blank"><i class="fas fa-download"></i> Download</a></li>
                                <li><a class="dropdown-item ajax-modal" href="' . route('apply-form.show', $apply_form->id) . '"><i class="fas fa-envelope"></i> Message</a></li>
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
        $application = Applicant::find($id);

        $pdf_path = public_path('/uploads/file/application/' . $application->file);
        $application->delete();

        if (File::exists($pdf_path))
            File::delete($pdf_path);

        if (!$request->ajax()) {
            return back()->with('success', _lang('Information has been deleted'));
        } else {
            return response()->json(['result' => 'success', 'message' => _lang('Information has been deleted sucessfully')]);
        }
    }

    public function pdf_download($file)
    {
        $file_path = public_path('uploads/file/application/' . $file);
        // return Response::download($file_path);
        return response()->download($file_path);
    }
}
