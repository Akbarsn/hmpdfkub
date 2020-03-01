<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function viewAdmin(){
        $event = Event::where('isDone', false)->orderBy('created_at', 'desc')->paginate(12);
        return view('admin.event')->with('event',$event);
    }

    public function viewUpdate($id){
        $event = Event::find($id);
        return view('admin.update-event')->with('event',$event);
    }
    
    public function AddEvent(Request $request)
    {
        $event = new Event;
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();
        return redirect(url("admin/event"));
    }
    
    public function EditEvent(Request $request, $id)
    {
        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->date = $request->input('date');
        $event->save();
        return redirect(url("admin/event"));
    }
    
    public function DeleteEvent($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect(url("admin/event"));
    }
    
    public function DoneEvent($id)
    {
        $event = Event::find($id);
        $event->isDone = true;
        $event->save();
        return redirect(url("admin/event"));
    }
}
