@extends('layouts.site')
@section('title','Beranda')
@section('page_title','Bersama Membangun Usaha')
@section('content')
  <section class="grid md:grid-cols-2 gap-6 items-center">
    <div>
      <p class="text-sm text-slate-600 mb-2">#UMKM Bersinergi</p>
      <h2 class="text-3xl font-extrabold leading-tight">
        Bersama Membangun Usaha, Meningkatkan Kesejahteraan UMKM Indonesia
      </h2>
      <p class="mt-3 text-slate-600">Temukan UMKM lokal, dukung produk berkualitas, bantu ekonomi daerah.</p>
      <div class="mt-5 flex gap-2">
        <a class="px-4 py-2 rounded-xl bg-blue-600 text-white" href="{{ route('umkm.index') }}">Jelajahi UMKM</a>
        <a class="px-4 py-2 rounded-xl bg-slate-100" href="{{ route('contact') }}">Kontak</a>
      </div>
    </div>
    <img class="rounded-2xl w-full h-64 object-cover"
         src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=1600"
         alt="Kolaborasi UMKM">
  </section>
@endsection
