@extends('adminlte.master')
@section('content')

<div class="ml-3 mt-3">
    <h2>Data Jawaban</h2>
    <a href="/jawaban/create" class="btn btn-primary mb-2">Ingin menjawab</a>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Pertanyaan</th>
              <th scope="col">Jawaban</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($jawaban as $key => $jwb)
              <tr>
                  <th> {{ $key +1 }} </th>
                  <td> {{ $jwb->question }} </td>
                  <td> {{ $jwb->isi }} </td>
                  <td>
                    <a href="/jawaban/{{ $jwb->id }}" class="btn btn-sm btn-info" >Show</a>
                    <a href="/jawaban/{{ $jwb->id }}/edit" class="btn btn-sm btn-default" >Edit</a>
                    <form action="/jawaban/{{$jwb->id}}" method="POST" style="display: inline">
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