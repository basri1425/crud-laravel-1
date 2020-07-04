<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use Illuminate\Http\Request;
use DB;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanya = DB::table('pertanyaans')
        ->orderByRaw('id')
        ->get();
            // return $tanya;
        $jawab = DB::table('jawabans')
        // ->where('pertanyaan_id',$pertanyaan_id)->get()
            ->join('pertanyaans', 'jawabans.pertanyaan_id', '=', 'pertanyaans.id')
            ->select('jawabans.*', 'pertanyaans.*')
            ->get();
        // return $jawab;

        return view('answers.index', compact('jawab','tanya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pertanyaan_id)
    {
        $tanya = DB::table('pertanyaans')->where('id',$pertanyaan_id)->get();
        // return $tanya;
        return view('answers.formJawab', compact('tanya'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request -> validate([

            'isiJawab'=> 'required'
        ]);

        // $status = Omset::create($request->all());

        try {
            $status = Jawaban::create($request->all());
            return redirect('/pertanyaan')->with('success','Data Omset sudah Tersimpan !!!');
        } catch (\Exception $e)  {
            return redirect('/pertanyaan')->with('error','Data Omset tidak dapat disimpan - cek tanggal omset !!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaan_id)
    {
        $tanya = DB::table('pertanyaans')
        ->where('id',$pertanyaan_id)->get();

        $jawab = DB::table('jawabans')
        ->where('pertanyaan_id',$pertanyaan_id)->get();

        return view('answers.show', compact('jawab','tanya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}
