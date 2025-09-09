<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmkmController extends Controller
{
    // Beranda sederhana
    public function home(Request $request)
    {
        $umkms = DB::table('umkms')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('home', compact('umkms'));
    }

    // List
    public function index(Request $request)
    {
        $q = $request->query('q');
        $query = DB::table('umkms')->orderByDesc('created_at');

        if ($q) {
            $query->where(function ($w) use ($q) {
                $w->where('nama', 'like', "%$q%")
                  ->orWhere('kategori', 'like', "%$q%")
                  ->orWhere('kota', 'like', "%$q%");
            });
        }

        $umkms = $query->paginate(10)->withQueryString();
        return view('umkm.index', compact('umkms', 'q'));
    }

    public function create()
    {
        return view('umkm.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'kota'      => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|string|max:1024',
            'alamat'    => 'nullable|string|max:255',
            'kontak'    => 'nullable|string|max:255',
            'website'   => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        DB::table('umkms')->insert(array_merge($data, [
            'created_at' => now(),
            'updated_at' => now(),
        ]));

        return redirect()->route('umkm.index')->with('ok', 'UMKM ditambahkan.');
    }

    public function show($id)
    {
        $umkm = DB::table('umkms')->where('id', $id)->first();
        abort_if(!$umkm, 404);
        return view('umkm.show', compact('umkm'));
    }

    public function edit($id)
    {
        $umkm = DB::table('umkms')->where('id', $id)->first();
        abort_if(!$umkm, 404);
        return view('umkm.edit', compact('umkm'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama'      => 'required|string|max:255',
            'kategori'  => 'nullable|string|max:255',
            'kota'      => 'nullable|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar'    => 'nullable|string|max:1024',
            'alamat'    => 'nullable|string|max:255',
            'kontak'    => 'nullable|string|max:255',
            'website'   => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
        ]);

        DB::table('umkms')->where('id', $id)->update(array_merge($data, [
            'updated_at' => now(),
        ]));

        return redirect()->route('umkm.show', $id)->with('ok', 'UMKM diupdate.');
    }

    public function destroy($id)
    {
        DB::table('umkms')->where('id', $id)->delete();
        return redirect()->route('umkm.index')->with('ok', 'UMKM dihapus.');
    }
}
