@extends('adminlte.master')
@section('content')

@php
    $pertanyaan = App\Pertanyaan::all();
@endphp
@foreach ($jawaban as $jwb)
<div class="ml-3 mt-3">
    <form action='/jawaban/{{ $jwb->id}}' method="POST">
      @csrf
      @method('PUT')
        <div class="form-group">
            <label>Pertanyaan</label>
                <select name="pertanyaan_id" class="form-control">
                    <option value="">-- Pilih Pertanyaan --</option>
                    @foreach ($pertanyaan as $tanya)
                    @php  $sel = ( $tanya['id'] == $jwb->pertanyaan_id) ? 'selected' : ''; @endphp
                    <option value="{{ $tanya['id'] }}" {{ $sel }}>{{ $tanya['isi'] }}</option>
                    @endforeach
                    
                </select>
        </div>
        
        <div class="form-group">
          <label for="isi">Jawaban</label>
        <input type="text" class="form-control" name="isi" id="isi" value="{{ $jwb->isi }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        
    </form>
</div>
@endforeach 
@endsection