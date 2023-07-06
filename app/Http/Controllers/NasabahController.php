<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('pages.datanasabah', compact('nasabah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.input-data-nasabah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'suku_bunga' => 'required',
                'jangka_waktu' => 'required',
                'plafond_kredit' => 'required',
                'sisa_hutang' => 'required',
                'jumlah_tanggunan' => 'required',
                'jaminan' => 'required'
            ],
            [
                'nama.required' => 'Kolom nama tidak boleh kosong',
                'suku_bunga.required' => 'Kolom suku bunga tidak boleh kosong',
                'jangka_waktu.required' => 'Kolom jangka waktu tidak boleh kosong',
                'plafond_kredit.required' => 'Kolom plafond kredit tidak boleh kosong',
                'sisa_hutang.required' => 'Kolom sisa hutang tidak boleh kosong',
                'jumlah_tanggunan.required' => 'Kolom jumlah tanggungan tidak boleh kosong',
                'jaminan.required' => 'Kolom jaminan tidak boleh kosong',

            ]
        );
        $bunga = ($request->plafond_kredit * ($request->suku_bunga / 100)) / (12 * $request->jangka_waktu);
        $angsuran_pokok = $request->plafond_kredit / (12 * $request->jangka_waktu) + $bunga;
        Nasabah::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'suku_bunga' => $request->suku_bunga,
            'jangka_waktu' => $request->jangka_waktu,
            'plafond_kredit' => $request->plafond_kredit,
            'sisa_hutang' => $request->sisa_hutang,
            'jumlah_tanggunan' => $request->jumlah_tanggunan,
            'jaminan' => $request->jaminan,
            'bunga' => $bunga,
            'angsuran_pokok' => $angsuran_pokok,
        ]);
        return redirect('/data-nasabah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nasabah $nasabah, $id)
    {
        //    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nasabah $nasabah, $id)
    {
        $data = $nasabah->find($id);
        $bunga = ($data->plafond_kredit * ($data->suku_bunga / 100)) / (12 * $data->jangka_waktu);
        $angsuran_pokok = $data->plafond_kredit / (12 * $data->jangka_waktu) + $bunga;
        return view('pages.form-edit-data-nasabah')->with([
            'nama' => $data->nama,
            'suku_bunga' => $data->suku_bunga,
            'jangka_waktu' => $data->jangka_waktu,
            'plafond_kredit' => $data->plafond_kredit,
            'sisa_hutang' => $data->sisa_hutang,
            'jumlah_tanggunan' => $data->jumlah_tanggunan,
            'jaminan' => $data->jaminan,
            'bunga' =>  $data->$bunga,
            'angsuran_pokok' =>  $data->$angsuran_pokok,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nasabah $nasabah, $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'suku_bunga' => 'required',
                'jangka_waktu' => 'required',
                'plafond_kredit' => 'required',
                'sisa_hutang' => 'required',
                'jumlah_tanggunan' => 'required',
                'jaminan' => 'required'
            ],
            [
                'nama.required' => 'Kolom nama tidak boleh kosong',
                'suku_bunga.required' => 'Kolom suku bunga tidak boleh kosong',
                'jangka_waktu.required' => 'Kolom jangka waktu tidak boleh kosong',
                'plafond_kredit.required' => 'Kolom plafond kredit tidak boleh kosong',
                'sisa_hutang.required' => 'Kolom sisa hutang tidak boleh kosong',
                'jumlah_tanggunan.required' => 'Kolom jumlah tanggungan tidak boleh kosong',
                'jaminan.required' => 'Kolom jaminan tidak boleh kosong',

            ]
        );
        $bunga = ($request->plafond_kredit * ($request->suku_bunga / 100)) / (12 * $request->jangka_waktu);
        $angsuran_pokok = $request->plafond_kredit / (12 * $request->jangka_waktu) + $bunga;
        $data = [
            'nama' => $request->nama,
            'suku_bunga' => $request->suku_bunga,
            'jangka_waktu' => $request->jangka_waktu,
            'plafond_kredit' => $request->plafond_kredit,
            'sisa_hutang' => $request->sisa_hutang,
            'jumlah_tanggunan' => $request->jumlah_tanggunan,
            'jaminan' => $request->jaminan,
            'bunga' => $bunga,
            'angsuran_pokok' => $angsuran_pokok,
        ];

        Nasabah::where('nama', $id)->update($data);
        return redirect('/data-nasabah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Nasabah $nasabah, $id)
    {
        Nasabah::where('id', $id)->delete();
        return redirect('/data-nasabah');
    }
}
