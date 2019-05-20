<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalarieController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       return view('salaries_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'salarie_nom'=>'required',
            'salarie_prenom'=>'required',
            'salarie_sexe'=> 'required',
            'salarie_date_naissance' => 'required',
            'salarie_id_niveau' => 'required',
            'salarie_id_suivi' => 'required'
          ]);
          $salarie = new Salarie([
            'salarie_nom'=> $request->get('salarie_nom'),
            'salarie_prenom'=> $request->get('salarie_prenom'),
            'salarie_sexe'=> $request->get('salarie_sexe'),
            'salarie_date_naissance' => $request->get('salarie_date_naissance'),
            'salarie_id_niveau' => $request->get('salarie_id_niveau'),
            'salarie_id_suivi' => $request->get('salarie_id_suivi')
          ]);
          $salarie->save();
          return redirect('/salaries')->with('Success', 'La valeur a été ajouté');
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
        //
    }
}
