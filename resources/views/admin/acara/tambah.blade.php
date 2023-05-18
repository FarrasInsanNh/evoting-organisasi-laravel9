@extends('admin.layouts.template')
@section('content')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Tambah Acara</h1>
                        </div>

                    <!-- Content Row -->
                    <a href="/admin/acara/" class="btn btn-primary">
                    Kembali
                    </a>
                    <br>
                    <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                   
                <form action="/admin/acara/insert" method="POST">
                    @csrf
                  
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Acara</strong>
                                <input type="text" name="nama_acara" class="form-control" placeholder="Nama Acara">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Waktu Pelaksanaan</strong>
                                <input class="form-control" name="pelaksanaan" placeholder="Waktu Pelaksanaan" type="date"></input>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Informasi Acara</strong>
                                <textarea style="height: 200px" class="form-control" name="info_acara" placeholder="Informasi Detail Mengenai Acara" type="text"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
               </div>
@endsection