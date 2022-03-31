@extends('template')
@section('title')
    Tambah User
@endsection
@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Aritmatika Penjumlahan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('proses_tambah') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Angka 1</label>
                                    <input type="text" class="form-control" placeholder="" name="angka1">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Angka 2</label>
                                    <input type="text" class="form-control" placeholder="" name="angka2">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success mt-4 mb-3" name="simpan"> + </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="">Hasil</label>
                            <input type="text" class="form-control" placeholder="0" value="" name="hasil">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection