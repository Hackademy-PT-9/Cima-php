<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ $css ?? '' }}" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<body style="background-color:lightgoldenrodyellow">
    <x-navbar />
    <main class="d-flex flex-column min-vh-100">
        <div class="spazio">
            {{ $slot }}
        </div>
    </main>
    <x-footer />
</body>

</html>
