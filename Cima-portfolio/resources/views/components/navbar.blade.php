<link rel="stylesheet" href="/style.css">
<nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed fixed-top">
    <div class="container-fluid spazio2">
      <a class="navbar-brand">{{env('APP_NAME')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" href="{{route('homepage')}}">Homepage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'chisiamo') active @endif" href="{{route('chisiamo')}}">Chi siamo</a>
              </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'servizi') active @endif" href="{{route('servizi')}}">Servizi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'contatti') active @endif" href="{{route('contatti')}}">Contatti</a>
              </li>
        </ul>
      </div>
    </div>
  </nav>