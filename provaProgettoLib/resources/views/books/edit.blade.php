<x-main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <main class="flex-shrink-0">
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Get in touch</h1>
                        <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="{{route('books.update', ['book'=>$book->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating mb-3">
                                    <input class="form-control" required id="name" name="name" value="{{$book->name}}" type="text" placeholder="Inserisci il nome del libro"/>
                                    <label for="name">Nome libro</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required id="anno" name="year" value="{{$book->year}}" type="text" placeholder="Anno produzione"/>
                                    <label for="pages">Anno produzione</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" required id="pages" name="pages" value="{{$book->pages}}" type="text" placeholder="Numero Pagine"/>
                                    <label for="pages">Numero pagine</label>
                                </div>
                                <select name="author_id" class="form-select" aria-label="Default select example">
                                    @foreach ($authors as $author)
                                        <option selected value="{{$author->id}}">{{$author->name}}</option>
                                    @endforeach
                                </select>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="image" name="image" type="file"/>
                                    <label for="pages">Immagine</label>
                                </div>
                                <button type="submit">Modifica libro</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Contact cards-->
                <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                        <div class="h5 mb-2">Chat with us</div>
                        <p class="text-muted mb-0">Chat live with one of our support specialists.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                        <div class="h5">Ask the community</div>
                        <p class="text-muted mb-0">Explore our community forums and communicate with other users.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                        <div class="h5">Support center</div>
                        <p class="text-muted mb-0">Browse FAQ's and support articles to find solutions.</p>
                    </div>
                    <div class="col">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                        <div class="h5">Call us</div>
                        <p class="text-muted mb-0">Call us during normal business hours at (555) 892-9403.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-main>