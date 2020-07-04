@extends('adminlte.master')
@section('content')

<div class="ml-3 mt-3">
  <h2>Data Pertanyaan</h2>
  <a href="/pertanyaan/create" class="btn btn-primary mb-2">Ada pertanyaan?</a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Pertanyaan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pertanyaan as $key => $pertanyaan)
            <tr>
                <th> {{ $key +1 }} </th>
                <td> {{ $pertanyaan->judul }} </td>
                <td> {{ $pertanyaan->isi }} </td>
                <td>
                  <a href="/pertanyaan/{{ $pertanyaan->id }}" class="btn btn-sm btn-info" >Show</a>
                  <a href="/pertanyaan/{{ $pertanyaan->id }}/edit" class="btn btn-sm btn-default" >Edit</a>
                  <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
                  </form>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</div>
@endsection