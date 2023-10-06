<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        @guest
        <a class="navbar-brand" href="{{route('public.homepage')}}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Registrati</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Login</a></li>
                
                
            </ul>
        </div>
        @endguest
        @auth
        <a class="navbar-brand" href="{{route('public.homepage')}}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('books.index')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('books.create')}}">Inserisci Libro</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('authors.create')}}">Inserisci Autore</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('categories.create')}}">Inserisci Categoria</a></li>
                
                <li class="nav-item">
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    @method('POST')
                        <button onclick="event.preventdefault(); this.closest('form').submit();">Logout</button>
                </form>
            </li>
            </ul>
        </div>
        @endauth
    </div>
</nav>