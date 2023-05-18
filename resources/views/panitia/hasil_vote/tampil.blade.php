@extends('panitia.layouts.template')
@section('content')
<div class="container-fluid">
      <div class="form-group">
                    <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                    </div>
	<div class="form-group row">
       @foreach($data as $data)
        <div class="col-sm-6 mb-3 mb-sm-0" style="text-align: center; margin-left: auto; margin-right: auto;"><b>Paslon No Urut {{$data->no_urut}}</b>
            <hr>
            <div class="form-group mb-3">
            	<img src="{{url('foto/'.$data->foto_ketua)}}" width="200px">
            	<img src="{{url('foto/'.$data->foto_wakil)}}" width="100px">
            </div>
            <div class="form-group mb-3">
            	<strong>{{$data->nama_ketua}} & {{$data->nama_wakil}}</strong>
            </div>
            <div class="mb-3">
                  <button type="submit" class="btn btn-primary">
            		{{ $data->total }}
            	</button>
                  
            </div>
        </div>
      @endforeach
	</div>
@endsection