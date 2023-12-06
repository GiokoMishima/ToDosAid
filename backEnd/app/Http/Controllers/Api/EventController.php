<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;

class EventController extends Controller
{
    public function index()
    {
        $Events = Events::all();
        return $Events;
    }

    public function store(Request $request)
    {
        $Event = new Events();
        $Event->userId = $request->userId;
        $Event->title = $request->title;
        $Event->initDay = $request->initDay;
        $Event->initMonth = $request->initMonth;
        $Event->endDay = $request->endDay;
        $Event->endMonth = $request->endMonth;
        $Event->details = $request->details;
        $Event->isDone = $request->isDone;
        $Event->save();
        return $Event;
        
    }

    public function show(string $id)
    {
        $Event = Events::find($id);
        return $Event;
    }

    public function update(Request $request, string $id)
    {
        $Event = Events::findOrFail($request->id);
        $Event->userId = $request->userId;
        $Event->title = $request->title;
        $Event->initDay = $request->initDay;
        $Event->initMonth = $request->initMonth;
        $Event->endDay = $request->endDay;
        $Event->endMonth = $request->endMonth;
        $Event->isDone = $request->isDone;
        $Event->details = $request->details;
        $Event->save();
        return $Event;
    }
    public function destroy(string $id)
    {
        $Event = Events::destroy($id);
        return "Event whit ".$id." has been deleted";
    }
}
