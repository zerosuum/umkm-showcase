<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','UMKM Showcase')</title>
  @vite('resources/js/app.js')
</head>
<body class="bg-slate-50 text-slate-800">
  @include('partials.nav')

  <main class="max-w-5xl mx-auto p-4">
    <h1 class="text-2xl md:text-3xl font-bold mb-4">@yield('page_title','UMKM Showcase')</h1>
    @yield('content')
  </main>

  @include('partials.footer')
</body>
</html>
