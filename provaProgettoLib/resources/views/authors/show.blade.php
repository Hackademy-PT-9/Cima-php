<x-main>
    <x-header />
    <div class="d-flex justify-content-center container-fluid">
        <div class="row col-md-8 m-3">
            <main>
                <h2>Dettagli</h2>
                <p>Nome: {{$author->name}}</p>
                <a href="{{route('authors.edit',$author)}}">Modifica</a>
                <form action="{{route('authors.destroy',$author)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-danger link-dark stretched-link" type="submit">Elimina</button>
            </form>
            </main>
        </div>
    </div>
</x-main>
