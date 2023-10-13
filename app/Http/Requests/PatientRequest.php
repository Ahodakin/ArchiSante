<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => ['required','min:3' ],
            'prenom' => ['required','min:5'],
            'sexe' => ['required'],
            'date_naiss' => 'required',
            'tel' => ['required', 'numeric', 'digits_between:10,20'],
            'assurance' => 'required',
            'tel_urgence' => ['required', 'numeric', 'digits_between:10,20'],
            'sutiation_matrimoniale' => 'required',
            'commune' => 'required',
            'proffession' => 'required',
            'groupe_sanguin' => 'required',
            'allergie' => 'required',
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'le nom est obligatoire.',
            'prenom.required' => 'le prenom est obligatoire.',
            'sexe.required' => 'le sexe est obligatoire.',
            'date_naiss.required' => 'le date du patient est obligatoire.',
            'tel.required' => 'letel est obligatoire.',
            'assurance.required' => 'assurance est obligatoire.',
            'tel_urgence.required' => 'le numéro de téléphone est obligatoire.',
            'sutiation_matrimoniale.required' => 'Veillez selectionnez votre situation matrimoniale.',
            'commune.required' => 'la commune est obligatoire.',
            'proffession.required' => 'Votre proffession est obligatoire.',
            'groupe_sanguin.required' => 'Veillez selectionnez votre groupe sanguin.',
            'allergie.required' => 'Veillez selectionnez votre allergies.',

            'nom.min' => 'Le Nom doit avoir au minimum 3 caractéres.',
            'prenom.min' => 'Le Prénom doit avoir au minimum 5 caractéres.',
            'tel.digits_between' => 'Le Numéro doit avoir au minimum 10 chiffres.',
            'tel.numeric' => 'Le Numéro durgence contient que des chiffres.',
            'tel_urgence.digits_between' => 'Le Numéro durgence doit avoir au minimum 10 chiffres.',
            'tel_urgence.numeric' => 'Le Numéro durgence contient que des chiffres.',
        ];
    }
}
