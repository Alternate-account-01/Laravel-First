<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function profil()
    {
        $title = 'Profil';
        $data = [
            'title'   => $title,
            'nama'    => 'Rafan Eka Dinata', 
            'kelas'   => 'XI PPLG 1',
            'sekolah' => 'SMK RUS KUDUS INDONESIA',
        ];
        return view('profil', $data);
    }


}
