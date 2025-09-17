@extends('layouts.site')

@section('title','Daftar UMKM')
@section('page_title','Daftar UMKM')

@section('content')
  @isset($umkms)
    <form method="get" action="{{ route('umkm.index') }}" style="margin:12px 0; display:flex; gap:8px; flex-wrap:wrap;">
  <input type="search" name="q" placeholder="Cari nama/kategori/kota…" value="{{ $q ?? '' }}">

  <select name="kategori">
    <option value="___SEMUA___">Semua Kategori</option>
    @isset($kategoris)
      @foreach($kategoris as $k)
        <option value="{{ $k }}" {{ (isset($kategori) && $kategori===$k) ? 'selected' : '' }}>{{ $k }}</option>
      @endforeach
    @endisset
  </select>

  <button type="submit">Filter</button>
</form>

<hr style="margin:16px 0;">

<h3>Statistik UMKM</h3>
<div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(180px,1fr)); gap:12px;">
  <div style="border:1px solid #ddd; padding:12px; border-radius:8px;">
    <div>Total UMKM</div>
    <strong>{{ $stat_total ?? 0 }}</strong>
  </div>
  <div style="border:1px solid #ddd; padding:12px; border-radius:8px;">
    <div>UMKM dengan Website</div>
    <strong>{{ $stat_punya_website ?? 0 }}</strong>
  </div>
  <div style="border:1px solid #ddd; padding:12px; border-radius:8px;">
    <div>Kategori Terbanyak</div>
    @if(!empty($stat_kategori_top))
      <strong>{{ $stat_kategori_top->kategori }} ({{ $stat_kategori_top->c }})</strong>
    @else
      <strong>-</strong>
    @endif
  </div>
  <div style="border:1px solid #ddd; padding:12px; border-radius:8px;">
    <div>UMKM Terbaru</div>
    @if(!empty($stat_terbaru))
      <strong>{{ $stat_terbaru->nama }}</strong>
    @else
      <strong>-</strong>
    @endif
  </div>
</div>


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
