<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function profil()
    {
        $nama = "Reza Asian";
        $npm  = "228160015";
        return view('profil', compact('nama', 'npm'));
    }

    public function pendidikan()
    {
        $kampus = "Universitas Medan Area";
        $prodi  = "Teknik Informatika";
        return view('pendidikan', compact('kampus', 'prodi'));
    }

    public function keahlian()
    {
        $skill = ['Memasak','Sanggup memutilasi nyamuk', 'Gambar anime', 'Bernyayi'];
        return view('keahlian', compact('skill'));
    }
}
