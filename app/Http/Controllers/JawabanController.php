<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
{
    //
    public function index(){
        $jawaban = DB::table('jawaban')
        ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
        ->select('jawaban.*', 'pertanyaan.isi AS question')
        ->get();
        return view('jawaban.index', compact('jawaban'));
    }

    public function create(){
        return view('jawaban.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $new_jawaban = DB::table('jawaban')->insert([
            'isi'=>$request->isi,
            'pertanyaan_id'=>$request->pertanyaan_id,
        ]);
        // dd($pertanyaan);
            return redirect('/jawaban');
    }

    public function show($id){
        $jawaban = DB::table('jawaban')
        ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
        ->select('jawaban.*','pertanyaan.isi AS question')
        ->where('jawaban.id', $id)
        ->get();
        return view('jawaban.show', compact('jawaban'));
    }

    public function edit($id){
        $jawaban = DB::table('jawaban')
        ->join('pertanyaan', 'pertanyaan.id', '=', 'jawaban.pertanyaan_id')
        ->select('jawaban.*','pertanyaan.isi AS question')
        ->where('jawaban.id', $id)
        ->get();
        return view('jawaban.edit', compact('jawaban'));
    }

    public function update($id, Request $request){
        $jawaban = DB::table('jawaban')
                        ->where('id', $id)
                        ->update([
                            'isi' => $request->isi,
                            'pertanyaan_id' => $request->pertanyaan_id,
                        ]);
        return redirect('/jawaban');
    }

    public function destroy($id){
        $delete = DB::table('jawaban')
                    ->where('id', $id)
                    ->delete();
        return redirect('/jawaban');
    }
}
