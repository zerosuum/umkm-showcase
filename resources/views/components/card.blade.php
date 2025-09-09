<article style="border:1px solid #eee;border-radius:8px;padding:12px;margin-bottom:12px;">
  <h3 style="margin:0 0 4px 0;">{{ $nama ?? 'Tanpa nama' }}</h3>

  @if(!empty($deskripsi) || !empty($kategori))
    <p style="margin:0 0 4px 0;">
      {{ $deskripsi ?? '' }}
      @if(!empty($kategori))
        <small style="opacity:.7;"> • {{ $kategori }}</small>
      @endif
    </p>
  @endif

  @if(!empty($kontak))
    <div style="font-size:13px;opacity:.85;margin:2px 0;">Kontak: {{ $kontak }}</div>
  @endif

  @php $href = $link ?? (isset($id) ? route('umkm.show', $id) : null); @endphp
  @if($href)
    <a href="{{ $href }}">Lihat detail</a>
  @endif
</article>
