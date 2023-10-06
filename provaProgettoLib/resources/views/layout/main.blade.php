<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body class="d-flex flex-column h-100">
    <x-navbar />
    {{ $slot }}
    <x-footer />
</body>

</html>
