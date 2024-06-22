<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    // function for listing all books
    public function index()
    {
        return Book::all();
    }

        // function for storing a book

    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }
    // function for editing a book

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book, 200);
    }

    public function destroy($id)
    {
        Book::findOrFail($id)->delete();
        return response()->json(null, 204);
    }}
