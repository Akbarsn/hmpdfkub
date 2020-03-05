<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchandises;

class MerchController extends Controller
{
    public function viewAll()
    {
        $merch = Merchandises::orderBy('created_at', 'desc')->get();
        return view('page.merchandise')->with('merch', $merch);
    }

    public function viewAdmin()
    {
        $merch = Merchandises::orderBy('created_at', 'desc')->get();
        return view('admin.merchandise')->with('merch', $merch);
    }

    public function viewUpdate($id)
    {
        $merch = Merchandises::find($id);
        return view('admin.update-merchandise')->with('merch', $merch);
    }

    public function AddMerch(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $merch = new Merchandises;
        $name = $request->input('name');
        $merch->name = $request->input('name');
        $merch->description = $request->input('description');
        $merch->price = $request->input('price');
        $image = $request->file('image');
        $image_title = $name . "_" . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $image->move("upload/merch/", $image_title);
        $merch->image_path = "upload/merch/" . $image_title;
        $merch->save();
        return redirect(url('/admin/merch'))->with('success', 'Merch added');
    }

    public function EditMerch(Request $request, $id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $name = $request->input('name');
        $merch = Merchandises::find($id);
        $merch->name = $request->input('name');
        $merch->description = $request->input('description');
        $merch->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_title = $name . "_" . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $image->move("upload/merch/", $image_title);
            $merch->image_path = "upload/merch/" . $image_title;
        }
        $merch->save();
        return redirect(url('/admin/merch'))->with('success', 'Merch edited');
    }

    public function DeleteMerch($id)
    {
        $merch = Merchandises::find($id);
        $merch->delete();
        return redirect(url('/admin/merch'))->with('success', 'Merch deleted');
    }
}
