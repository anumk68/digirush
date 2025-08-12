<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\HomeForm;
use App\Models\MessageForm;
use App\Models\ContactForm;
use App\Models\SeoCompany;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{

    //index function
    public function contactindex()
    {
        $data = ContactForm::orderBy('id', 'desc')->get();
        return view('admin.contact.index', compact('data'));

    }

    //view function
    public function contactview($id)
    {
        $data = ContactForm::find($id);
        return view('admin.contact.view', compact('data'));
    }

    //delete function
    public function contactdestroy($id)
    {
        $data = ContactForm::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Record deleted successfully');
    }
    public function contactbulkDelete(Request $request)
    {
        if ($request->ajax()) {
            if ($request->has('ids') && is_array($request->ids)) {
                $deletedCount = ContactForm::whereIn('id', $request->ids)->delete();
                return response()->json([
                    'success' => true,
                    'message' => "{$deletedCount} record(s) deleted successfully."
                ]);
            }
            return response()->json([
                'success' => false,
                'message' => 'No records selected.'
            ], 400);
        }
        if ($request->has('ids') && is_array($request->ids)) {
            ContactForm::whereIn('id', $request->ids)->delete();
            return back()->with('success', 'Selected records deleted successfully.');
        }
        return back()->with('error', 'No records selected.');
    }

}