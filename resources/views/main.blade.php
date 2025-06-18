<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('section.header')
    @include('section.about')
    @include('section.service')
    @include('section.portfolio')
    @include('section.team')
    @include('section.contact')
    @include('section.footer')
</body>
</html>
