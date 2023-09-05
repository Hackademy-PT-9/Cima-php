<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>Modern Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>
<x-main>
    <form action="{{Route('store')}}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input class="form-control" id="name" type="text" placeholder="Enter the book name..."
                data-sb-validations="required" name="title" />
            <label for="name">Titolo libro</label>
        <!-- Phone number input-->
        <div class="form-floating mb-3">
            <input class="form-control" id="phone" type="number" placeholder="numero pagine"
                data-sb-validations="required" name="pages" />
            <label for="phone">pagine</label>
        <!-- Submit Button-->
        <input type="submit" name="invia" value="god">
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
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i>
            </div>
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
</x-main>

</html>
