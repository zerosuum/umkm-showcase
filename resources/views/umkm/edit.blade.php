@extends('layouts.site')
@section('title','Edit UMKM')
@section('page_title','Edit UMKM')

@section('content')
  <h2>Edit: {{ $umkm->nama }}</h2>

  <form action="{{ route('umkm.update', $umkm->id) }}" method="POST">
    @csrf @method('PUT')

    <p><label>Nama <input type="text" name="nama" value="{{ old('nama', $umkm->nama) }}"></label></p>
    <p><label>Kategori <input type="text" name="kategori" value="{{ old('kategori', $umkm->kategori) }}"></label></p>
    <p><label>Kota <input type="text" name="kota" value="{{ old('kota', $umkm->kota) }}"></label></p>
    <p><label>Deskripsi <textarea name="deskripsi" rows="4">{{ old('deskripsi', $umkm->deskripsi) }}</textarea></label></p>

    <button type="submit">Update</button>
    <a href="{{ route('umkm.index') }}">Batal</a>
  </form>
@endsection
