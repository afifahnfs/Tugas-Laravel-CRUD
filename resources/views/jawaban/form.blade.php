@extends('adminlte.master')
@section('content')

@php
    $pertanyaan = App\Pertanyaan::all();
@endphp

<div class="ml-3 mt-3">
    <form action='/jawaban' method="POST">
      @csrf
      
        <div class="form-group">
            <label>Pertanyaan</label>
                <select name="pertanyaan_id" class="form-control">
                    <option value="">-- Pilih Pertanyaan --</option>
                    @foreach ($pertanyaan as $tanya)
                    @php $sel = ( old('pertanyaan')==$tanya['id'] ) ? 'selected' : ''; @endphp
                    <option value="{{ $tanya['id'] }}">{{ $tanya['isi'] }}</option>
                    @endforeach
                    
                </select>
        </div>
        
        <div class="form-group">
          <label for="isi">Jawaban</label>
          <input type="text" class="form-control" name="isi" id="isi" placeholder="Isi Pertanyaan">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>
    
@endsection