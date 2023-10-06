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
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="form-floating mb-3">
            <input class="form-control" required id="name" name="name"
                value="{{ old('name') }}" type="text"
                placeholder="Inserisci il nome della categoria" />
            <label for="name">Categoria</label>
        </div>
        <button type="categoria">Crea libro</button>
</x-main>