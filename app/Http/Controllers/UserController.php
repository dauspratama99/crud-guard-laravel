<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;
use App\Models\Userapp;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = DB::table('userapps')->get();
        return view('page.user',$data);
    }

    public function tambah()
    {
        return view('page.input-user');
    }

    public function save(Request $r)
    {
        $validator = validator::make($r->all(),[
            'nama' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'gambar' => 'required',
        ]);

        if($validator->fails()){
            return redirect('input-user')
                ->withErrors($validator)
                ->withInput();
        }

        // input gambar
        $file       = $r->file('gambar');
        $fileName   = $file->getClientOriginalName();
        $extension  = $file->getClientOriginalExtension();
        $file->move('gambar/', $fileName);

        // simpan
        $simpan = Userapp::insert([
            'nama' => $r->nama,
            'no_telpon' => $r->no_telpon,
            'alamat' => $r->alamat,
            'email' => $r->email,
            'jenis_kelamin' => $r->jenis_kelamin,
            'gambar' => $fileName,
        ]);

        if($simpan == TRUE){
            return redirect('user')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect('input-user')->with('error', 'Data gagal disimpan');
        }
    }

    public function edit($id)
    {
        $data['user'] = DB::table('userapps')->where('id',$id)->first();
        return view('page.edit-user',$data);
    }

    public function update(Request $r, $id)
    {
        $validator = validator::make($r->all(),[
            'nama' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'gambar' => 'required',
        ]);

        if($validator->fails()){
            return redirect('edit-user')
                ->withErrors($validator)
                ->withInput();
        }

        if ($r->file('gambar') == NULL) {

            $update = Userapp::where('id',$id)->update([
                'nama' => $r->nama,
                'no_telpon' => $r->no_telpon,
                'alamat' => $r->alamat,
                'email' => $r->email,
                'jenis_kelamin' => $r->jenis_kelamin,
            ]);

        } else {

            $fotoLama = DB::table('userapps')->where('id', $id)->first();
            if ($fotoLama->gambar != NULL){
                unlink('gambar/'. $fotoLama->gambar);
            } 
             // input gambar
                $file       = $r->file('gambar');
                $fileName   = $file->getClientOriginalName();
                $extension  = $file->getClientOriginalExtension();
                $file->move('gambar/', $fileName);

            $update = Userapp::where('id',$id)->update([
                'nama' => $r->nama,
                'no_telpon' => $r->no_telpon,
                'alamat' => $r->alamat,
                'email' => $r->email,
                'jenis_kelamin' => $r->jenis_kelamin,
                'gambar' =>  $fileName,
            ]);
        }


        if($update == TRUE){
            return redirect('user')->with('success', 'Data berhasil diupdate');
        } else {
            return redirect('edit-user')->with('error', 'Data gagal diupdate');
        }
    }

    public function hapus($id)
    {
        $fotoLama = DB::table('userapps')->where('id', $id)->first();
        if ($fotoLama->gambar != NULL){
            unlink('gambar/'. $fotoLama->gambar);
        } 
        
        $hapus = DB::table('userapps')->where('id', $id)->delete();
        if($hapus == TRUE){
            return redirect('user')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('edit-user')->with('error', 'Data gagal dihapus');
        }
    }
}
