@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3">
    <form action='/pertanyaan' method="POST">
      @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul">
        </div>
        <div class="form-group">
          <label for="isi">Pertanyaan</label>
          <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

    
@endsection