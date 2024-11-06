<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show()
    {
        $data = Book::with('authors', 'genres')->get();
        return response()->json($data);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'published_year' => 'required',
        ]);

        $post = Book::create([$validatedData]);
        return response()->json($post, 201);
    }
}
