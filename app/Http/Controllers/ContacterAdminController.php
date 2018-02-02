<?php

namespace App\Http\Controllers;

use App\ContacterAdmin;
use App\AdminContacterClient;

use Illuminate\Http\Request;
use Auth;
class ContacterAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $contacteradmins = ContacterAdmin::all();
        return view('client.contacteradmin',compact('contacteradmins'));
    }

    public function index1()
    {
      $contacteradmins = AdminContacterClient::all();
        return view('client.allmessage',compact('contacteradmins'));
    }


    public function suppmimer($id)
    {
      $user = AdminContacterClient::find($id);
       $user->delete();

        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('client.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        ContacterAdmin::create([
                  'client_id'=>Auth::guard('client')->user()->id,
                  'sujet'=>$request->sujet,
                  'description'=>$request->desc,
                ]);
                session()->flash('message', 'message envoyer avec success');

        return redirect()->route('contacter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContacterAdmin  $contacterAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(ContacterAdmin $contacterAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContacterAdmin  $contacterAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(ContacterAdmin $contacterAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContacterAdmin  $contacterAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContacterAdmin $contacterAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContacterAdmin  $contacterAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContacterAdmin $contacterAdmin,$id)
    {
      $user = ContacterAdmin::find($id);
       $user->delete();

        return redirect()->route('contacter.index');
    }
}
