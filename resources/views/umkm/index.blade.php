@extends('layouts.site')

@section('title','Daftar UMKM')
@section('page_title','Daftar UMKM')

@section('content')
  @if(isset($umkms) && count($umkms))
    @foreach($umkms as $x)
      @include('components.card', [
        'nama' => $x['nama'] ?? null,
        'deskripsi' => $x['deskripsi'] ?? null,
        'kategori' => $x['kategori'] ?? null,
        'slug' => $x['slug'] ?? null
      ])
    @endforeach
  @else
    <p>[data tidak tersedia]</p>
  @endif
@endsection
