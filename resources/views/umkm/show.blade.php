@extends('layouts.site')

@section('title', $umkm->nama ?? 'Detail UMKM')
@section('page_title', $umkm->nama ?? 'Detail UMKM')

@section('content')
  @if($umkm)
    <p>Kategori: {{ $umkm->kategori ?? '[data tidak tersedia]' }}</p>
    @if(!empty($umkm->kota))
      <p>Kota: {{ $umkm->kota }}</p>
    @endif
    @if(!empty($umkm->deskripsi))
      <p>Deskripsi: {{ $umkm->deskripsi }}</p>
    @endif

    @if(!empty($umkm->gambar))
      <img src="{{ $umkm->gambar }}" alt="{{ $umkm->nama }}"
           style="max-width:100%;border-radius:8px;margin:8px 0;">
    @endif

    <p><a href="{{ route('umkm.index') }}">← kembali</a></p>
  @else
    <p>[data tidak tersedia] — UMKM tidak ditemukan.</p>
  @endif

  @if(!empty($umkm->kontak) || !empty($umkm->alamat) || !empty($umkm->website) || !empty($umkm->instagram))
    <h3 style="margin-top:12px;">Kontak</h3>
    <ul style="padding-left:16px; line-height:1.7;">
      @if(!empty($umkm->kontak))
        <li><strong>Kontak:</strong> {{ $umkm->kontak }}</li>
      @endif
      @if(!empty($umkm->alamat))
        <li><strong>Alamat:</strong> {{ $umkm->alamat }}</li>
      @endif
      @if(!empty($umkm->website))
        <li><strong>Website:</strong> <a href="{{ $umkm->website }}" target="_blank" rel="noopener">{{ $umkm->website }}</a></li>
      @endif
      @if(!empty($umkm->instagram))
        <li><strong>Instagram:</strong> <a href="{{ $umkm->instagram }}" target="_blank" rel="noopener">{{ $umkm->instagram }}</a></li>
      @endif
    </ul>
  @endif
@endsection
