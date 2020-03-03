<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function addPicture(Request $request)
    {
        $galeri = new Gallery;
        $image_title = $request->input('image_title');
        $galeri->image_title = $request->input('image_title');
        $image = $request->file('image');
        $image_title = $image_title . "." . time() . '.' . $image->getClientOriginalExtension();
        $image->move("upload/galeri/", $image_title);
        $galeri->image_path = "upload/galeri/" . $image_title;
        $galeri->save();
        return redirect(url("admin/galeri"))->with('success', 'Image added');
    }



    // public function editPicture(Request $request)
    // {
    //     $id = $request->input('id');
    //     $galeri = Gallery::find($id);
    //     $image_title = $request->input('image_title');
    //     $galeri->image_title = $request->input('image_title');
    //     if($request->hasFile('image')){
    //         $image = $request->file('image');
    //         $image_name = $image_title . "." . time() . '.' . $image->getClientOriginalExtension();
    //         // $path = $request->file('image')->storeAs('', $image_title);
    //         $galeri->image_path = "" . $image_name;
    //     }
    //     $galeri->save();
    //     return redirect(url("admin/galeri"));
    // }

    public function deleteGallery($id)
    {
        $galeri = Gallery::find($id);
        $galeri->delete();
        return redirect(url("admin/galeri"))->with('success', 'Image deleted');
    }
    
    public function viewAllImage()
    {
        $galeri = Gallery::orderBy('created_at', 'desc')->paginate(9);
        return view('page.galeri')->with('galeri', $galeri);
    }

    public function viewAdmin(){
        $galeri = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.galeri')->with('galeri', $galeri);
    }
}
