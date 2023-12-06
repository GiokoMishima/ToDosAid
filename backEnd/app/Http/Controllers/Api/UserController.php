<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    public function index()
    {
        $Users=Users::all();
        return $Users;
    }

    public function store(Request $request)
    {
        $User = new Users();
        $User->mail= $request->mail;
        $User->pass = $request->pass;
        $User->name= $request->name;
        $User->save();

    }

    public function show(string $id)
    {
       $User = Users::find($id);
       return $User;
    }

    public function showByEmial(string $email)
    {
        $User = Users::where('mail', $email)->find();
        return $User;
    }

    public function update(Request $request, string $id)
    {
        $User = Users::findOrFail($request->id);
        $User->mail= $request->mail;
        $User->pass = $request->pass;
        $User->name= $request->name;
        $User->save();
        return $User;
    }


    public function destroy(string $id)
    {
        $User = Users::destroy($id);
        return $User;
    }
}
