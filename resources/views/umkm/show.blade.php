@extends('layouts.site')
@section('title', $u->nama ?? 'Detail UMKM')
@section('page_title', $u->nama ?? 'Detail UMKM')

@section('content')
  @if($u ?? null)
    <article class="grid md:grid-cols-2 gap-6">
      @if($u->gambar)
        <img src="{{ $u->gambar }}" class="rounded-2xl w-full h-64 object-cover" alt="{{ $u->nama }}">
      @endif
      <div>
        <div class="flex items-center gap-2 mb-2">
          <span class="text-xs px-2 py-1 rounded-full bg-slate-100">{{ $u->kategori ?? 'N/A' }}</span>
          <span class="text-xs px-2 py-1 rounded-full bg-slate-100">{{ $u->kota ?? 'N/A' }}</span>
        </div>
        <p class="text-slate-700">{{ $u->deskripsi ?? '[data tidak tersedia]' }}</p>
        <div class="mt-4">
          @if($u->telepon)
            <a href="tel:{{ $u->telepon }}" class="px-4 py-2 rounded-xl bg-blue-600 text-white">Hubungi</a>
          @endif
          <a href="{{ route('umkm.index') }}" class="px-4 py-2 rounded-xl bg-slate-100">← Kembali</a>
        </div>
      </div>
    </article>
  @else
    <p>[data tidak tersedia] — UMKM tidak ditemukan.</p>
  @endif
@endsection
