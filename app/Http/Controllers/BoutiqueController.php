<?php

namespace App\Http\Controllers;

use App\Boutique;
use Illuminate\Http\Request;

class BoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $b=Boutique::all();
        return view('admin.index',compact('b'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.boutique');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Boutique::create([
                'name'=>$request->name,
                'adresse'=>$request->adresse,
                'lng'=>$request->lng,
                'lat'=>$request->lat,
              ]);
              session()->flash('message', 'message envoyer avec success');

      return redirect()->route('boutique.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show(Boutique $boutique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function edit(Boutique $boutique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boutique $boutique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = Boutique::find($id);
       $user->delete();

        return redirect()->back();
    }
}
