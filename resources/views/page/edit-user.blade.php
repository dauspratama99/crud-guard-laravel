@extends('template')
@section('title')
    Edit User
@endsection
@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Edit Data User</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('update-user', $user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" value="<?= $user->nama; ?>"  name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telpon</label>
                                    <input type="number" class="form-control" value="<?= $user->no_telpon ?>"  name="no_telpon">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" value="<?= $user->alamat ?>" name="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" value="<?= $user->email ?>" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                             
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" id="">
                                        <option value="" selected disabled>- Pilih -</option>
                                        <option <?= $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?> value="Laki-laki">Laki-laki</option>
                                        <option <?= $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?> value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Lama</label><br>
                                    <img src="{{ asset('/gambar/'. $user->gambar) }}" alt="Image" width="25px" >
                                </div>
                                <div class="form-group">
                                    <label for="">Foto Baru</label>
                                    <input type="file" class="form-control" placeholder="Email" name="gambar">
                                </div>

                                    <div class="float-right">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" name="simpan">Update</button>
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