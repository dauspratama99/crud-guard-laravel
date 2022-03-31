@extends('template')
@section('title')
    Tambah Barang
@endsection
@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Data Barang</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('simpan-barang') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" class="form-control" placeholder="" name="kode_barang">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" placeholder="" name="nama_barang">
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Stok</label>
                                    <input type="number" class="form-control" placeholder="" name="jumlah_stok">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga Barang</label>
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