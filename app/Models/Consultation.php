<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = "consultations";
    protected $fillable = [
        'id',
        'motif_consult',
        'raison_consult',
        'diagnostic',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'id_patient');
    }
}
