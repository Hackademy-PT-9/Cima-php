<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-color:lightgoldenrodyellow">
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand">{{ env('APP_NAME') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">Homepage</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('chisiamo') }}">Chi siamo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('servizi') }}">Servizi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container text-center d-flex align-items-center justify-content-center mt-5">
      <div class="row  col-6 col-md-8 justify-content-evenly">
        @foreach ($services as $service)
            <div class="card mt-5" style="width: 18rem;">
                <img src="https://www.assesspeople.com/img/content/services/service-2.jpg" class="card-img-top"
                    alt="Servizio">
                <div class="card-body">
                    <h5 class="card-title">{{ $service }}</h5>
                    <p class="card-text">Accedi al servizio adesso!</p>
                    <a href="{{ route('dettagliservizi', ['servizio' => $service]) }}"
                        class="btn btn-primary">Accedi</a>
                </div>
            </div>
        @endforeach
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
