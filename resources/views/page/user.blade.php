@extends('template')
@section('title')
    Data User
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h5>Data User</h5>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('tambah-user') }}" class="btn btn-info btn-sm" >Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <td>No</td>
                            <td>Nama Lengkap</td>
                            <td>No Telp</td>
                            <td>Alamat</td>
                            <td>Email</td>
                            <td>Jenis Kelamin</td>
                            <td>Foto</td>
                            <td>Aksi</td>
                        </thead>
                        <tbody>
                            @foreach ($user as $i => $data )
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->no_telpon }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->jenis_kelamin }}</td>
                                <td> <img src="{{ asset('/gambar/'. $data->gambar) }}" alt="Image" width="30px"> </td>
                                <td>
                                    <a href="{{ route('edit-user', $data->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="{{ route('hapus-user', $data->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    @if(session('success')  == TRUE)
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if(session('error')  == TRUE)
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection