@extends('adminlte.master')
@section('content')

<div class="ml-3 mt-3">
    <div class="card card-dark">
        <div class="card-header"> 
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <div class="ml-2 ">
        <form action='/pertanyaan/{{ $pertanyaan->id}}' method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $pertanyaan->judul }}">
                </div>
                <div class="form-group">
                <label for="isi">Pertanyaan</label>
                <input type="text" class="form-control" name="isi" id="isi" value="{{ $pertanyaan->isi }}">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div
    
@endsection