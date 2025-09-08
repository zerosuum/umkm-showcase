<article style="border:1px solid #eee;border-radius:8px;padding:12px;margin-bottom:12px;">
  <h3 style="margin:0 0 4px 0;">{{ $nama ?? '[data tidak tersedia]' }}</h3>
  <p style="margin:0 0 4px 0;">
    {{ $deskripsi ?? '[data tidak tersedia]' }}
    <small style="opacity:.7;"> • {{ $kategori ?? '[data tidak tersedia]' }}</small>
  </p>
  @isset($slug)
    <a href="{{ route('umkm.show', $slug) }}">Lihat detail</a>
  @endisset
</article>
