<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'NomorTelepon' => 'required',
            'Asal' => 'required',
            'SkalaGempa' => 'required',
            'KataKata' => 'required'
        ]);

        DB::table('form')->insert([
            'Nama' => $request->Nama,
            'NomorTelepon' => $request->NomorTelepon,
            'Asal' => $request->Asal,
            'SkalaGempa' => $request->SkalaGempa,
            'KataKata' => $request->KataKata,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back()->with('success', 'Survei berhasil dikirim!');
    }
}
