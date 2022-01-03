<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubTemplate;
class PageController extends Controller
{
    public function detail_template(Request $request,$id)
    {
        $data = SubTemplate::where('template_id',$id)->get();


        return view('pages.detail_template',['data'=>$data]);
    }
    public function edit_sub_template(Request $request)
    {
        $data = SubTemplate::find($request->id);
        return view('pages.edit_sub_template',['data'=>$data]);
    }
    public function save(Request $request)
    {
        return view('pages.index');
    }

    public function downloadTemplates(Request $request)
    {
        return view('pages.index');
    }
}
