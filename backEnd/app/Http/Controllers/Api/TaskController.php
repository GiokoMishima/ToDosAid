<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TaskController extends Controller
{ 
    public function index()
    {
        $Tasks=Tasks::all();
        return $Tasks;
    }

    public function store(Request $request)
    {
        $Task = new Tasks();
        $Task->userId = $request->userId;
        $Task->title = $request->title;
        $Task->isDone = $request->isDone;
        $Task->save();

    }

    public function show(string $id)
    {
       $Task = Tasks::find($id);
       return $Task;
    }

    public function update(Request $request, string $id)
    {
        $Task = Tasks::findOrFail($request->id);
        $Task->userId= $request->userId;
        $Task->title= $request->title;
        $Task->isDone = $request->isDone;
        $Task->save();
        return $Task;
    }

    public function destroy(string $id)
    {
        $Task = Tasks::destroy($id);
        return $Task;
    }
}
