<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ConsultationRequest;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.consultation',);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(ConsultationRequest $request)
    {
        $medecinId = Auth::id();
        $patientId = $request->input('patient_id');
        dd( $patientId);
        // $patient = Patient::find($patientId);
        // $patientId = Patient::where('id', $patientId)->value('id_patient');
        $consult = new Consultation();
        $consult->motif_consult=$request->motif_consult;
        $consult->raison_consult=$request->raison_consult;
        $consult->diagnostic=$request->diagnostic;
        $consult->id_user = $medecinId;
        $consult->id_patient = $patientId;
        $consult->save();
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