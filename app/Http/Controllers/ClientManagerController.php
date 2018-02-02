<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ContacterAdmin;
use App\AdminContacterClient;
use Auth;
class ClientManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $client =Client::all();

      return view('admin.client',compact('client'));
    }



    public function message()
    {
      $m =ContacterAdmin::all();

      return view('admin.message',compact('m'));
    }

    public function suppmimer($id)
    {
      $user = ContacterAdmin::find($id);
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
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      AdminContacterClient::create([
                'admin_id'=>Auth::guard('admin')->user()->id,
                'sujet'=>$request->sujet,
                'description'=>$request->desc,
              ]);
              session()->flash('message', 'message envoyer avec success');

      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = Client::find($id);
       $user->delete();

        return redirect()->back();
    }
}
