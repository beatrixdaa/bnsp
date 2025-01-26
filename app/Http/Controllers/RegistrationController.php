<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use App\Models\Member;
use Barryvdh\DomPDF\Facade\PDF;


class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agama = Agama::get();

        return view('registrations.index', compact('agama'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'tanggal_lahir' => 'required|date',
            'no_telepon' => 'required|numeric',
            'agama_id' => 'required|integer',
            'alamat' => 'required|string',
            'tanggal_pinjam' => 'required|numeric',
            'status_anggota' => 'required|string',
            'judul_buku' => 'required|string',
        ]);

        $member = new Member();
        $member->nama = $request->nama;
        $member->email = $request->email;
        $member->tanggal_lahir = $request->tanggal_lahir;
        $member->no_telepon = $request->no_telepon;
        $member->agama_id = $request->agama_id;
        $member->alamat = $request->alamat;
        $member->status_anggota = $request->status_anggota;
        $member->judul_buku = $request->judul_buku;
        $member->tanggal_pinjam = $request->tanggal_pinjam;
        $member->save();
        $id_pendaftaran = $member->id;

        return redirect('/registrations/cetak/'.$id_pendaftaran)->with('pesan', 'Pendaftaran berhasil');
    }

    public function cetak($id)
    {
        $member = Member::with('agama')->find($id);
        //return view('registrations.cetak', compact('member'));

        $pdf = PDF::loadView('registrations.cetak',['member'=>$member]);
        return $pdf->download('karturegistrasi.pdf');
    }
}
