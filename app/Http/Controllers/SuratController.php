<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    // Tampilkan daftar surat
    public function index()
    {
        $surats = Surat::with('kategori')->latest()->get();
        return view('surat.index', compact('surats'));
    }

    // Form tambah surat
    public function create()
    {
        $kategori = Kategori::all();
        return view('surat.create', compact('kategori'));
    }

    // Simpan surat baru
    public function store(Request $request)
    {
        $request->validate([
            'nomor_surat' => 'required|string|max:50|unique:surat,nomor_surat',
            'id_kategori' => 'required|exists:kategori,id',
            'judul' => 'required|string|max:255',
            'file_surat' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $path = $request->file('file_surat')->store('surat', 'public');

        Surat::create([
            'nomor_surat' => $request->nomor_surat,
            'id_kategori' => $request->id_kategori,
            'judul' => $request->judul,
            'tanggal_pengarsipan' => now(),
            'lokasi_file' => $path,
        ]);

        return redirect()->route('surat.index')->with('success', 'Surat berhasil diarsipkan.');
    }

    // Hapus surat
    public function destroy($id)
    {
        $surat = Surat::findOrFail($id);

        // Hapus file dari storage
        if ($surat->lokasi_file && Storage::disk('public')->exists($surat->lokasi_file)) {
            Storage::disk('public')->delete($surat->lokasi_file);
        }

        $surat->delete();

        return redirect()->route('surat.index')->with('success', 'Surat berhasil dihapus.');
    }
}
