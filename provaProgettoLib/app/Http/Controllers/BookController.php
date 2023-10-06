<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Mail\InfoMail;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
    public function index()
    {
        
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories= Category::all();
        return view('books.create', compact('authors','categories'));
    }

    public function store(BookRequest $request)
    {

        $path_image = '';
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $file_extension = $request->file('image')->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }

        $book = Book::create([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages,
            'image' => $path_image,
            'author_id' => $request->author_id,
        ]);
        $book->categories()->attach($request->categories);
        // $data = [
        //     'name' => $book->name,
        //     'id' => $book->id
        // ];
        // Mail::to(Auth::user()->email)->send(new InfoMail($data));
        return redirect(route('books.index'));
    }

    public function show(Book $book)
    {
        // $books = Book::find($book);
        // if(!$book)
        // {
        //     abort(404);
        // }
        // Book::findOrFail($book);
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book','authors'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $path_image = $book->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $file_name);
        }

        $book->update([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages,
            'image' => $path_image,
            'author_id' => $request->author_id
        ]);
        return redirect()->route('books.index');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
