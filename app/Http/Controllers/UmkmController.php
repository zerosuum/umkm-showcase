<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UmkmController extends Controller
{
    // GET /umkm
    public function index(Request $request)
    {
        $q = trim($request->get('q',''));
        $umkms = Umkm::query()
            ->when($q, fn($w) =>
                $w->where('nama','like',"%$q%")
                  ->orWhere('kategori','like',"%$q%")
                  ->orWhere('kota','like',"%$q%")
            )
            ->orderBy('nama')
            ->paginate(9)
            ->withQueryString();

        return view('umkm.index', compact('umkms','q'));
    }

    // GET /umkm/{umkm}
    public function show(Umkm $umkm)
    {
        return view('umkm.show', ['u' => $umkm]);
    }
}
