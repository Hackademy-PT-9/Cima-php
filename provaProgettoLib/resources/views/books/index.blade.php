<x-main>
    <x-header />
    <div class="d-flex justify-content-center container-fluid">
        <div class="row col-md-8 m-3">
            @foreach ($books as $book)
                <x-card :name="$book->name" :year="$book->year" :pages="$book->pages" :image="Storage::url($book->image)" route1="{{route('books.show', $book)}}" :categories="$book->$category->name">
                </x-card>
            @endforeach
        </div>
    </div>
</x-main>
