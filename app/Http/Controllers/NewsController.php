<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function viewAdmin()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.berita')->with('news', $news);
    }

    public function addNews(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');

        $request->validate([
            'image' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',
        ]);
        
        $news = new News;
        $title = $request->input('title');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $image = $request->file('image');
        $image_title = $title . "." . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
        $image->move("upload/berita/", $image_title);
        $news->image_path = "upload/berita/" . $image_title;
        $news->save();
        return redirect(url("admin/berita"))->with('success', 'News added');
    }

    public function viewUpdate($id)
    {
        $news = News::find($id);
        return view('admin.update-berita')->with('news', $news);
    }

    public function editNews(Request $request, $id)
    {
        date_default_timezone_set('Asia/Jakarta');

        $news = News::find($id);
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        if ($request->hasFile('image')) {
            $title = $request->input('title');
            $image = $request->file('image');
            $image_title = $title . "." . date('Y-m-d') . '.' . $image->getClientOriginalExtension();
            $image->move("upload/berita/", $image_title);
            $news->image_path = "upload/berita/" . $image_title;
        }
        $news->save();
        return redirect(url("/admin/berita"))->with('success', 'News edited');
    }

    public function deleteNews($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect(url("/admin/berita"))->with('success', 'News deleted');
    }

    public function viewAllNews()
    {
        $latestNews = News::orderBy('created_at', 'desc')->limit(4)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('page.berita')->with('news', $news)->with('latestNews', $latestNews);
    }

    public function viewNewsByID($id)
    {
        $recommendedNews = News::orderBy('created_at', 'desc')->limit(3)->get();
        $news = News::find($id);
        if ($news != null) {
            return view('page.berita-detail')
                ->with('news', $news)
                ->with('recommendedNews', $recommendedNews);
        } else {
            return redirect(url('berita'));
        }
    }
}
