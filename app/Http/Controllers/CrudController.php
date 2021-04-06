<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Exception;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'author' => 'required|min:6'
        ]);

        if(!Book::create([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
        ])){
            throw new \Exception('Error message');
        }

        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);

        if(!$book){
            throw new \Exception('Error message');
        }
        return view('books.edit', ['book' => $book]);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'author' => 'required|min:6'
        ]);
        $book = Book::findOrFail($id);
        if(!$book){
            throw new \Exception('Error message');
        }
        $book->update([
            'name' => $request->input('name'),
            'author' => $request->input('author'),
        ]);
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
