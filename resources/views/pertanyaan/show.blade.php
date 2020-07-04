@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-3">
<div class="card card-dark">
    <div class="card-header "> 
        <h3 class="card-title">{{ $pertanyaan->judul}}</h3>
    </div>
    <div class="card-body">
      <p class="card-text"> {{ $pertanyaan->isi }} </p>
      <a href="/pertanyaan" class="btn btn-primary">Home</a>
    </div>
  </div>
</div>
@endsection