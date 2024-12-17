<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama' => 'required',
            'NomorTelepon' => 'required',
            'Asal' => 'required',
            'SkalaGempa' => 'required',
            'KataKata' => 'required'
        ]);

        Form::create($validatedData);

        return redirect()->route('form.index')
            ->with('success', 'Laporan berhasil dikirim!');
    }
} 