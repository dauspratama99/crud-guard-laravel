<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use App\Models\BarangModel;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {   
        $data['barang'] = DB::table('barang_models')->get();
        return view('page.barang',$data);
    }

    public function tambah()
    {
        return view('page.input-barang');
    }
}
