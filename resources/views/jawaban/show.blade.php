@extends('adminlte.master')
@section('content')
@foreach ($jawaban as $jwb)
<div class="ml-3 mt-3">
<div class="card card-dark">
    <div class="card-header "> 
        <h3 class="card-title">{{ $jwb->question}}</h3>
    </div>
    <div class="card-body">
      <p class="card-text"> {{ $jwb->isi }} </p>
      <a href="/jawaban" class="btn btn-primary">Home</a>
    </div>
    
  </div>
</div>
@endforeach
@endsection