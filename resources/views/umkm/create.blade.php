@extends('layouts.site')
@section('title','Tambah UMKM')
@section('page_title','Tambah UMKM')
@section('content')
  <form method="post" action="{{ route('umkm.store') }}">
    @csrf
    <label>Nama</label><br>
    <input name="nama" value="{{ old('nama') }}" required><br>
    <label>Kategori</label><br>
    <input name="kategori" value="{{ old('kategori') }}"><br>
    <label>Kota</label><br>
    <input name="kota" value="{{ old('kota') }}"><br>
    <label>Gambar (URL)</label><br>
    <input name="gambar" value="{{ old('gambar') }}"><br>
    <label>Deskripsi</label><br>
    <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br><br>
    <button type="submit">Simpan</button>
    <a href="{{ route('umkm.index') }}">Batal</a>
  </form>
@endsection