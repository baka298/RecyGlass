<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class CustomRegisterController extends Controller
{
    public function index()
    {
        return view('vendor.adminlte.customRegister');
    }

    protected function customCreate(Request $request)
    {
        $user = new User;
        $user->email = $request->email;
        $user->company = $request->company;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->site = $request->site;
        $user->category = $request->category;
        $nomimage = $request->file('image')->store('','public');
        // $nomimage->store('','public');
        $user->image = $nomimage;

        $user->save();
        return redirect(route('home'));


    }
}
