<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationRequest extends FormRequest
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
            'motif_consult'=>'required',
            'raison_consult'=>'required',
            'diagnostic'=>'required',
        ];
    }

    public function messages(){
        return [
            'motif_consult.required'=>'Motif obligatoire.',
            'raison_consult.required'=>'Raison Obligatoire.',
            'diagnostic.required'=>'Diagnostic Obligatoire.',
        ];
    }
}
