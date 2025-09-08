<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>@yield('title','UMKM Showcase')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  @include('partials.nav')

  <main style="max-width:1000px;margin:24px auto;padding:0 12px;">
    <h1 style="margin-bottom:8px;">@yield('page_title','UMKM Showcase')</h1>
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>
