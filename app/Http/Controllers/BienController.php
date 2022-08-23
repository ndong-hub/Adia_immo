<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bien;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biens = Bien::all();
        return view('liste', compact('biens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enregistrer_bien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bien = new Bien;
        $bien->designation = $request->nom;
        $bien->prix = $request->prix;
        $bien->description = $request->description;
        $bien->save();

        return redirect()->route('bien.index');
        // return view('liste');
        // return back()->with('message', "le bien à été crée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bien $biens)
    {
        return view('show', compact('biens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bien $bien, $id)
    {
        $bien = Bien::find($id);
        return view('editer', compact('bien'));
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
        $data = $request->validate;
        
        $bien = Bien::find($id);
        $bien->designation = $request->designation;
        $bien->prix = $request->prix;
        $bien->description = $request->detail;
        $bien->save();

        return redirect()->route('bien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bien = Bien::find($id);
        $bien->delete();

        return redirect()->route('bien.index');
    }
}
