@extends('layouts.site')

@section('title', $u['nama'] ?? 'Detail UMKM')
@section('page_title', $u['nama'] ?? '[data tidak tersedia]')

@section('content')
  @if($u)
    <p>Kategori: {{ $u['kategori'] ?? '[data tidak tersedia]' }}</p>
    <p>Deskripsi: {{ $u['deskripsi'] ?? '[data tidak tersedia]' }}</p>
    <p>Slug: {{ $u['slug'] }}</p>
    <p><a href="{{ route('umkm.index') }}">← kembali</a></p>
  @else
    <p>[data tidak tersedia] — UMKM tidak ditemukan.</p>
  @endif
@endsection
