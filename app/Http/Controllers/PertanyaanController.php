<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanya = Pertanyaan::all();

    return view('questions.index', compact('tanya'));

        return view('questions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questions.pertanyaan');
        // return ('tess');
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
            'judul' => 'required',
            'isi'=> 'required'
        ]);

        // $status = Omset::create($request->all());

        try {
            $status = Pertanyaan::create($request->all());
            return redirect('/pertanyaan')->with('success','Data Omset sudah Tersimpan !!!');
        } catch (\Exception $e)  {
            return redirect('/pertanyaan')->with('error','Data Omset tidak dapat disimpan - cek tanggal omset !!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
