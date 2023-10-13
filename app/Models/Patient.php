<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'sexe',
        'date_naiss',
        'tel',
        'assurance',
        'tel_urgence',
        'sutiation_matrimoniale',
        'commune',
        'proffession',
        'groupe_sanguin',
        'allergie',
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'id_patient');
    }
}