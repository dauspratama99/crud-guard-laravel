<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AritmatikaController extends Controller
{
    public function index()
    {    
        return view('page.aritmatika');
    }

    public function proses_tambah(Request $r)
    {
        $a1 = $r->angka1;
        $a2 = $r->angka2;

        $data['hasil'] = $a1 + $a2;
        dd($data['hasil']);
        return view('page.aritmatika',$data);
    }

}

