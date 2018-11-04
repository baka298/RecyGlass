<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Role::partners();
        return view('admin.partners.index-partner', compact('partners'));
    }

    public function attente() {
        $partners = User::guests();
        return view('admin.partners.index-demande', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $this->authorize('update', $id);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->authorize('update', $id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $this->authorize('delete', $id);

        if($user->delete()){
            // $this->intervention->imageDelete($user->image);
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function change($id){
        $user = User::find($id);
        if($user->role->slug === 'partner'){
            $user->role_id = 3;

        }else if($user->role->slug === 'guest'){
            $user->role_id = 2;

        }
        if($user->save()){
            return redirect()->back();
        }
    }
}
