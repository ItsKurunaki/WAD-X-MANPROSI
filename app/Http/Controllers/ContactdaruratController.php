<?php

namespace App\Http\Controllers;

use App\Models\contactdarurat;
use App\Http\Requests\StorecontactdaruratRequest;
use App\Http\Requests\UpdatecontactdaruratRequest;
use Illuminate\Http\Request;

class ContactdaruratController extends Controller
{
    
    public function index()
    {
        $contacts = contactdarurat::all();
        return view('contactdarurat', compact('contacts')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formaddnumber');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new contactdarurat();
        $contact->Nama = $request->nama;
        $contact->NomorTelepon = $request->nomor;
        $contact->Asal = $request->asal;
        $contact->save();

        return redirect()->route('contactdarurat.index')->with('success', 'Kontak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(contactdarurat $contactdarurat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactdarurat $contactdarurat)
    {
        return view('contactdarurat.edit', compact('contactdarurat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = contactdarurat::find($id);
        $contact->Nama = $request->nama;
        $contact->NomorTelepon = $request->nomor;
        $contact->Asal = $request->asal;
        $contact->save();

        return redirect()->back()->with('success', 'Kontak berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = contactdarurat::find($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Kontak berhasil dihapus');
    }
}
