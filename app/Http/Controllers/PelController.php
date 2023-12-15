<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Golongan;
use App\Models\Users;
use Illuminate\Http\Request;

class PelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mendapatkan informasi pengguna yang sedang login
        $currentUser = auth()->user();

        // Mendapatkan semua golongan dan pengguna untuk formulir
        $getgol = Golongan::all();
        $getuser = Users::all();

        return view('pelanggan.create', compact('getgol', 'getuser', 'currentUser'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pel_no' => 'required',
            'gol_id' => 'required',
            'pel_nama' => 'required',
            'pel_alamat' => 'required',
            'pel_ktp' => 'required',
            'pel_meteran' => 'required',
            'id' => 'required',
        ]);

        // Dapatkan id golongan berdasarkan nama
        $gol_id = Golongan::where('gol_nama', $request->gol_nama)->value('gol_id');

        // Dapatkan id user berdasarkan name
        $user_id = Users::where('name', $request->name)->value('id');

        Pelanggan::create([
            'pel_no' => $request->pel_no,
            'pel_id_gol' => $request->gol_id,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_ktp' => $request->pel_ktp,
            'pel_meteran' => $request->pel_meteran,
            'pel_id_user' => $request->id,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $row = Pelanggan::with(['golongan', 'users'])->find($id);
        $getgol = Golongan::all(); // Ambil semua data dari tabel golongan
        $getuser = Users::all(); // Ambil semua data dari tabel users
        $currentUser = auth()->user(); // Assuming you are using Laravel's built-in authentication

        return view('pelanggan.edit', compact('row', 'getgol', 'getuser', 'currentUser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        Pelanggan::find($id)->update([
            'pel_no' => $request->pel_no,
            'pel_id_gol' => $request->gol_id,
            'pel_nama' => $request->pel_nama,
            'pel_alamat' => $request->pel_alamat,
            'pel_ktp' => $request->pel_ktp,
            'pel_meteran' => $request->pel_meteran,
            'pel_id_user' => $request->id,
        ]);

        return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelanggan::destroy($id);

        return redirect('pelanggan');
    }
}
