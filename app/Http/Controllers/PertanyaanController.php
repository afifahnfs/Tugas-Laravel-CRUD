<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get(); //get memunculkan semua data
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function store(Request $request){
        $new_pertanyaan = DB::table('pertanyaan')->insert([
            'judul'=>$request->judul,
            'isi'=>$request->isi
        ]);
        return redirect('/pertanyaan');
    }

    public function show($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first(); //first memunculkan 1 data
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first(); //first memunculkan 1 data
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $pertanyaan = DB::table('pertanyaan')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request->judul,
                            'isi' => $request->isi
                        ]);
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $delete = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->delete();
        return redirect('/pertanyaan');
    }
}
