<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $judul = 'Home';
        return view('home', ['judul' => $judul]);
    }

    public function about($nilai = "Kosong"){
        $judul = 'Home';
        return view('about', ['judul' => $judul, 'nilai' => $nilai]);
    }

    public function mahasiswa(){
        $judul = 'Home';
        return view('mahasiswa', ['judul' => $judul]);
    }
}
