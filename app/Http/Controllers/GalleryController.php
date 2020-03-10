<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function addPicture(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');

        $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);

        $galeri = new Gallery;
        $image_title = $request->input('image_title');
        $galeri->title = $request->input('image_title');
        $image = $request->file('image');
        $image_title = $image_title . "_" . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $image->move("upload/galeri/", $image_title);
        $galeri->img_path = "upload/galeri/" . $image_title;
        $galeri->save();
        return redirect(url("admin/galeri"))->with('success', 'Image added');
    }

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
