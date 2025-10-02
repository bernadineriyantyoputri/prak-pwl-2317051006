<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pengguna</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light"> {{-- tambahkan flex & min-vh-100 --}}

    {{-- Navbar Component --}}
    <x-navbar />

    {{-- Konten utama --}}
    <main class="flex-grow-1 container my-4"> {{-- flex-grow biar isi mendorong footer ke bawah --}}
        @yield('content')
    </main>

    {{-- Footer Component --}}
    <x-footer /> {{-- pastikan di file footer ada class mt-auto --}}

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
