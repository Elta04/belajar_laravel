<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use Illuminate\Support\Facades\Hash;
use App\Models\Hadiah;

class DikiController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota', ['anggota' => $anggota]);
    }

    public function hash(){
        $hash_password_saya = Hash::make('halo saya elta');
        echo $hash_password_saya;
        }
}
