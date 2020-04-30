<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $judul = 'Home';
        return view('home', ['judul' => $judul]);
    }

    public function about(){
        $judul = 'Home';
        return view('about', ['judul' => $judul]);
    }

    public function mahasiswa(){
        $judul = 'Home';
        return view('mahasiswa', ['judul' => $judul]);
    }
}
