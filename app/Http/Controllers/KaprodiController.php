<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;
use Illuminate\Http\Request;

class KaprodiController extends Controller
{

    // ---------------- INI CUMA UBAH NAME DI TABEL DOSEN ------------------
    // public function update(Request $request, $id)
    // {
    //     $kaprodi = Kaprodi::find($id);
    //     $kaprodi->update($request->only(['name', 'nip', 'kode_dosen']));

    //     return redirect()->back()->with('success', 'Data Kaprodi berhasil diupdate');
    // }

    // -------------- INI UBAH NAME DI DOSEN DAN USERNAME NYA DI TABEL USER
    public function update(Request $request, $id)
    {
        // Temukan Kaprodi berdasarkan ID
        $kaprodi = Kaprodi::find($id);
        
        // Update data Kaprodi
        $kaprodi->update($request->only(['name', 'nip', 'kode_dosen']));
        
        // Update username di tabel users jika name diperbarui
        $user = $kaprodi->user; // Ambil user terkait
        if ($user) {
            $user->username = $request->input('name'); // Menggunakan name sebagai username
            $user->save(); // Simpan perubahan ke tabel users
        }

        return redirect()->back()->with('success', 'Data Kaprodi berhasil diupdate');
    }


}
