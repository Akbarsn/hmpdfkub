<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proker;

class ProkerController extends Controller
{
    public function GetProkerByBidangId($bidang_id)
    {
        $proker = Proker::where('bidang_id', $bidang_id)->get();
        return view('page.bidang-kerja')->with('proker', $proker);
    }

    public function viewAdmin()
    {
        $proker = Proker::all();
        return view('admin.proker')->with('proker', $proker);
    }

    public function viewUpdate($id)
    {
        $proker = Proker::find($id);
        return view('admin.update-proker')->with('proker', $proker);
    }

    public function AddProker(Request $request)
    {
        $proker = new Proker;
        $proker->title = $request->input('title');
        $proker->description = $request->input('description');
        $proker->bidang_id = $request->input('bidang_id');
        $proker->save();
        return redirect(url("admin/proker"));
    }
    
    public function EditProker(Request $request, $id)
    {
        $proker = Proker::find($id);
        $proker->title = $request->input('title');
        $proker->description = $request->input('description');
        $proker->bidang_id = $request->input('bidang_id');
        $proker->save();
        return redirect(url("admin/proker"));
    }
    
    public function DeleteProker($id)
    {
        $proker = Proker::find($id);
        $proker->delete();
        return redirect(url("admin/proker"));
    }
}
