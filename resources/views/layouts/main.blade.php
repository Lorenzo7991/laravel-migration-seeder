<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ Vite::asset('resources/img/favicon.ico')}}" type="img/ico">
    <title>{{ env('APP_NAME')}} | @yield('title')</title>

      {{-- Import Vite  --}}
      @vite('resources\js\app.js')
</head>
<body>
      <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <div id="nav-title" class="navbar-brand fs-2">{{ env('APP_NAME')}}</div>
        </div>
    </header>
    
    @yield('main-content')

    <footer class="bg-dark text-light py-4">
    <div class="container text-center">
        <p>© 2024 {{ env('APP_NAME')}}. Tutti i diritti riservati.</p>
    </div>
</footer>

</body>
</html>