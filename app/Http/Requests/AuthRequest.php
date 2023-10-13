<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AuthRequest extends FormRequest
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
         ### Sécurisé les champs ###
            'nom' => ['required'],
            'prenom' => ['required'],
            'date_doctor' => ['required'],
            'email' => ['required', Rule::unique('users', 'email')],
            'specialite' => ['required'],
            'ville' => ['required'],
            'password' => ['required', 'confirmed'],
        ];

    }

    public function messages() {

        return [
         ### Afficher un message lorsque le champs n'est pas remplir ###
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'date_doctor.required' => 'La date de naissance du médecin est obligatoire.',
            'email.required' => 'L '.' email est obligatoire.',
            'specialite.required' => 'La spécialité est obligatoire.',
            'ville.required' => 'La ville est obligatoire.',
            'password.required' => 'Le password est obligatoire.',


            ### Afficher un message lorsque le champs n'est pas remplir ###
            // 'nom.min' => 'Le champs doit avoir au minimum :min carétères.',
            // 'prenom.min' => 'Le champs doit avoir au minimum :min carètères.',
            // 'prenom.max' => 'Le champs doit avoir au maximum :max carètères.',
        ];
    }

}