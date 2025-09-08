@extends('layouts.site')
@section('title','Daftar UMKM')
@section('page_title','Daftar UMKM')

@section('content')
  <form method="get" class="mb-4 flex gap-2">
    <input name="q" value="{{ $q ?? '' }}" placeholder="Cari nama/kategori/kota…"
           class="flex-1 bg-white border border-slate-300 rounded-xl px-4 py-2">
    <button class="px-4 py-2 rounded-xl bg-blue-600 text-white">Cari</button>
  </form>

  @if($umkms->count())
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
      @foreach($umkms as $x)
        <article class="rounded-2xl border bg-white shadow-sm overflow-hidden">
          @if($x->gambar)
            <img src="{{ $x->gambar }}" class="w-full h-40 object-cover" alt="{{ $x->nama }}">
          @endif
          <div class="p-4">
            <div class="flex items-center justify-between">
              <h3 class="font-semibold text-lg">{{ $x->nama }}</h3>
              <span class="text-xs px-2 py-1 rounded-full bg-slate-100">{{ $x->kategori ?? 'N/A' }}</span>
            </div>
            <p class="text-sm text-slate-600">{{ $x->kota ?? 'N/A' }}</p>
            <p class="text-sm mt-2 line-clamp-2">{{ $x->deskripsi ?? '' }}</p>
            <a class="inline-block mt-3 text-blue-600" href="{{ route('umkm.show', $x->id) }}">Lihat detail →</a>
          </div>
        </article>
      @endforeach
    </div>
    <div class="mt-6">{{ $umkms->links() }}</div>
  @else
    <p>[data tidak tersedia] — belum ada data UMKM di database.</p>
  @endif
@endsection
