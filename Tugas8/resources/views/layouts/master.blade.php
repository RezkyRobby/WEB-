<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Konten Utama -->
    <div style="flex: 1;">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
