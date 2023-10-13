<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dossier(){
        return View('home.dossier');
    }
    public function about(){
        return View('home.about');
    }
    public function consultation(){
        return View('home.Consultation');
    }
    public function ordonnance(){
        return View('home.ordonnance');
    }
    public function donner(){
        return View('home.donner');
    }

}