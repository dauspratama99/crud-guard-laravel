@extends('template')
@section('title')
    Data Barang
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <h5>Data Barang</h5>
                    </div>
                    <div class="float-right">
                        <a href="{{ route('tambah-barang') }}" class="btn btn-info btn-sm" >Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <td>No</td>
                            <td>Kode Barang</td>
                            <td>Nama Barang</td>
                            <td>Jumlah Stok</td>
                            <td>Harga Barang</td>
                            <td>Tanggal Masuk</td>
                            <td>Aksi</td>
                        </thead>
                        <tbody>
                            @foreach ($barang as $i => $data )
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $data->kode_barang }}</td>
                                <td>{{ $data->nama_barang }}</td>
                                <td>{{ $data->jumlah_stok }}</td>
                                <td>{{ $data->harga_barang }}</td>
                                <td>{{ $data->tgl_masuk }}</td>
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