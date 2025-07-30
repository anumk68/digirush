<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Blog;
use App\Models\HomeForm;
use App\Models\MessageForm;
use App\Models\ContactForm;
use App\Models\SeoCompany;
use App\Models\Landing;
use App\Models\HireDeveloper;
use Illuminate\Support\Facades\DB;


class SeocompanyController extends Controller
{
   
    //index function
    public function index(){
        $data = SeoCompany::orderBy('id','desc')->get();
        return view('admin.seo.index',compact('data'));

    }

    //view function
    public function view($id){
        $data = SeoCompany::find($id);
        return view('admin.seo.view',compact('data'));
    }

    //delete function
    public function destroy($id){
        $data = SeoCompany::find($id);
        $data->delete();
        return redirect()->back()->with('success','Record deleted successfully');
    }


    //us landing pages functions
    //index function
    public function index_us(){
        $data = Landing::orderBy('id','desc')->get();
        return view('admin.uslanding.list',compact('data'));

    }

    //view function
    public function view_us($id){
        $data = Landing::find($id);
        return view('admin.uslanding.view',compact('data'));
    }

    //delete function
    public function destroy_us($id){
        $data = Landing::find($id);
        $data->delete();
        return redirect()->back()->with('success','Record deleted successfully');
    }


    public function index_hire(){
        $data = HireDeveloper::orderBy('id','desc')->get();
        return view('admin.hire_developers.list',compact('data'));

    }

    //delete function
    public function destroy_hire($id){
        $data = HireDeveloper::find($id);
        $data->delete();
        return redirect()->back()->with('success','Record deleted successfully');
    }

    public function bulkDeletehire(Request $request)
{
    if ($request->has('ids')) {
        HireDeveloper::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected developers deleted successfully.');
    }

    return back()->with('error', 'No developers selected.');
}

    public function bulkDelete(Request $request)
{
    if ($request->has('ids')) {
        SeoCompany::whereIn('id', $request->ids)->delete();
        return back()->with('success', 'Selected SEO inquiries deleted successfully.');
    }

    return back()->with('error', 'No records selected.');
}

}