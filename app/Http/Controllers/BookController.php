<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return $books; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->nombre = $request->nombre;
        $book->titulo = $request->nombre;
        $book->autor = $request->nombre;
        $book->year = $request->nombre;
        $book->isbn = $request->nombre;
        

        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($request->id);
        $book->nombre = $request->nombre;
        $book->titulo = $request->nombre;
        $book->autor = $request->nombre;
        $book->year = $request->nombre;
        $book->isbn = $request->nombre;

        $book->save();

        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $book = Book::destroy($request->id);

        return $book;
    }
}
