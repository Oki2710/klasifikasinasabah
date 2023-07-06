<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class DataminingController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('pages.data-mining', compact('nasabah'));
    }
    public function hasil()
    {
        $nasabah = Nasabah::all();
        return view('pages.hasil', compact('nasabah'));
    }

    public function hitung($id)
    {
        $data = Nasabah::where('id', $id)->first();

        $hasil = Cart::hasil(
            Cart::jaminan($data->jaminan),
            Cart::jumlahTanggungan($data->jumlah_tanggunan),
            Cart::angsuranPokok($data->angsuran_pokok),
            Cart::sisaHutang($data->sisa_hutang),
        );
        Nasabah::where('id', $id)->update(['kolektibilitas' => $hasil]);
        return redirect('/hasil');
    }

    public function store(Request $request) /* untuk checkbox pilihan data */
    {
        // return $request->id;
        $request->validate([
            'id' => 'required',
        ]);

        foreach ($request->id as $id) {
            $data = Nasabah::where('id', $id)->first();

            $hasil = Cart::hasil(
                Cart::jaminan($data->jaminan),
                Cart::jumlahTanggungan($data->jumlah_tanggunan),
                Cart::angsuranPokok($data->angsuran_pokok),
                Cart::sisaHutang($data->sisa_hutang),
            );
            Nasabah::where('id', $id)->update(['kolektibilitas' => $hasil]);
        }
        return redirect('/hasil');
    }
}
