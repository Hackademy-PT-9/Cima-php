<x-authlayout>
    <main class="flex-shrink-0">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                            <form action="{{route('register')}}" method="POST">
                               @csrf
                               @method('POST')
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Inserisci nome" data-sb-validations="required" name="name" />
                                    <label for="name">Nome</label>
                                </div>
                                <!-- Email address input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" type="email" placeholder="name@example.com" name="email" />
                                    <label for="email">Indirizzo email</label>
                                </div>
                                <!-- Phone number input-->
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" type="password" placeholder="Password" name="password" />
                                    <label for="email">Password</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password_confirmation" type="password" placeholder="Conferma password" name="password_confirmation" />
                                    <label for="password_confirmation">Conferma password</label>
                                </div>
                                <button type="submit">Registrati</button>
                                <a href="{{route('login')}}">Sei già registrato?</a>
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
</x-authlayout>