<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        $books = Book::with('author')->get();
        return view('books.index', compact('books', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_id' => 'required|exists:authors,id',
            'judul' => 'required|string',
            'published_date' => 'required|date',
        ]);

        Book::create($validated);

        return redirect('/books')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::with('author')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($id)
    {
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'author_id' => 'required|exists:authors,id',
            'judul' => 'required|string',
           'penerbit' => 'required|string',
            'published_date' => 'required|date',
        ]);

        $book = Book::findOrFail($id);
        $book->update($validated);

        return redirect('/books')->with('pesan', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('pesan', 'Data berhasil dihapus');
    }
}
