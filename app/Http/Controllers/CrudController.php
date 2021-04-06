<?php

namespace App\Http\Controllers;

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
        return view('books.index');
    }

    public function create()
    {
        return view('books.create');
    }
}
