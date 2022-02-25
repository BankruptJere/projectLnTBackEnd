<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = Book::oldest()->paginate(10);
        return view('books.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function list()
    {
        $data = Book::oldest()->paginate(24);
    
        return view('books.list',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 24);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    public function contact()
    {
        return view('books.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
         $request->validate([
            'title' => ['required','min:5', 'max:20'],
            'author' => ['required','min:5', 'max:20'],
            'page' => ['required','gt:0'],
            'year' => ['required','gt:2000','lt:2021'],
        ]);
    
        Book::create($request->all());
     
        return redirect()->route('books.index')
                        ->with('success','Book added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'page' => 'required',
            'year' => 'required',
        ]);
    
        $book->update($request->all());
    
        return redirect()->route('books.index')
                        ->with('success','Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
    
        return redirect()->route('books.index')
                        ->with('success','Book deleted successfully');
    }
}
