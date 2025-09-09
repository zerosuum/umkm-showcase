@extends('layouts.site')

@section('title','Beranda')
@section('page_title','Beranda')

@section('content')
  <p>Selamat datang di UMKM Showcase mini. Jelajahi daftar UMKM lokal.</p>
  <hr>
  <h2>UMKM Unggulan</h2>
  @if(isset($umkms) && count($umkms))
    @foreach($umkms as $x)
      @include('components.card', [
      'nama'      => $x->nama,
      'deskripsi' => $x->deskripsi,
      'kategori'  => $x->kategori,
      'link'      => route('umkm.show', $x->id),
      ])
    @endforeach
  @else
    <p>[data tidak tersedia]</p>
  @endif
@endsection
