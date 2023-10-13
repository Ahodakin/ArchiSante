<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class Patientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return View('home.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('home.patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $request)
    {
        $patient = new Patient();
        $patient->nom=$request->nom;
        $patient->prenom=$request->prenom;
        $patient->sexe=$request->sexe;
        $patient->date_naiss=$request->date_naiss;
        $patient->tel=$request->tel;
        $patient->assurance=$request->assurance;
        $patient->tel_urgence=$request->tel_urgence;
        $patient->sutiation_matrimoniale=$request->sutiation_matrimoniale;
        $patient->commune=$request->commune;
        $patient->proffession=$request->proffession;
        $patient->groupe_sanguin=$request->groupe_sanguin;
        $patient->allergie=$request->allergie;
        $patient->save();
        // return to_route('home.liste');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}