<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\BidangKerja;
use App\Proker;
use App\News;

class HomeController extends Controller
{
    public function GetHomeView()
    {
        date_default_timezone_set('Asia/Jakarta');

        $date = date('Y-m-d H:i:s');
        $event = Event::where('isDone', false)->orderBy('created_at', 'desc')->where('date', '>', $date)->limit(3)->get();
        $news = News::orderBy('created_at', 'desc')->limit(6)->get();
        $bidangKerja = BidangKerja::all();
        return view('page.home')
            ->with('event', $event)
            ->with('news', $news)
            ->with('bidangKerja', $bidangKerja);
    }

    public function GetBidangKerja($id)
    {
        $bidangKerja = BidangKerja::find($id);
        $proker = Proker::where('bidang_id', $id)->get();
        return view('page.bidang-kerja')->with('bidangKerja', $bidangKerja)->with('proker', $proker);
    }
}
