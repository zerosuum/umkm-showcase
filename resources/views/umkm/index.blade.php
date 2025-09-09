@extends('layouts.site')

@section('title','Daftar UMKM')
@section('page_title','Daftar UMKM')

@section('content')
  @isset($umkms)
    <form method="get" action="{{ route('umkm.index') }}" style="margin:12px 0;">
      <input type="search" name="q" placeholder="Cari nama/kategori/kota…" value="{{ $q ?? '' }}">
      <button type="submit">Cari</button>
    </form>
    @forelse($umkms as $x)
      @include('components.card', [
        'nama'      => $x->nama ?? null,
        'deskripsi' => $x->deskripsi ?? null,
        'kategori'  => $x->kategori ?? null,
        'kontak'    => $x->kontak ?? null,  
        'id'        => $x->id ?? null,  
      ])
    @empty
      <p>[data tidak tersedia]</p>
    @endforelse

    @if(method_exists($umkms, 'links'))
      <div style="margin-top:12px;">{{ $umkms->links() }}</div>
    @endif
  @else
    <p>[data tidak tersedia]</p>
  @endisset
@endsection
