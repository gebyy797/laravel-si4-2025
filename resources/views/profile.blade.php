<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Ini Halaman Profile</h1>
    <p>Nama saya adalah {{ $nama }}</p>   

    <nav>
        <ul>
            <li><a href="{{ url('/index') }}">Home</a></li>
            <li><a href="{{ url('/about') }}">About</a></li>
            <li><a href="{{ url('/mahasiswa') }}">Mahasiswa</a></li>
        </ul>
    </nav>
</body>
</html>
