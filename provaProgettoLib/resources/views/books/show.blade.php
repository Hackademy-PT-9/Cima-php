<x-main>
    <x-header />
    <div class="d-flex justify-content-center container-fluid">
        <div class="row col-md-8 m-3">
            <main>
                <h2>Dettagli</h2>
                <p>Nome: {{$book->name}}</p>
                <p>Immagine: </p>
                <p>Authore: {{$book->author->name}}</p>
                <img src="{{Storage::url($book->image)}}" alt="">
                <a href="{{route('books.edit',$book)}}">Modifica</a>
                <form action="{{route('books.destroy',$book)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-danger link-dark stretched-link" type="submit">Elimina</button>
            </form>
            </main>
        </div>
    </div>
</x-main>
