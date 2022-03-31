@extends('template')
@section('title')
    Tambah User
@endsection
@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data User</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpan-user') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukan nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telpon</label>
                                    <input type="number" class="form-control" placeholder="Masukan No. Telp" name="no_telpon">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Masukan alamat" name="alamat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="">
                                        <option value="" selected disabled>- Pilih -</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" class="form-control" placeholder="Email" name="gambar">
                                </div>
                                <div class="float-right">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                                            <button type="reset" class="btn btn-secondary" name="simpan">Batal</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection