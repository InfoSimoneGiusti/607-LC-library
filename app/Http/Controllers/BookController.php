<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function list() {

        //$books = Book::all();

        //ottengo una collection (un array con gli steroidi!) di Book
        $books = Book::orderBy('id', 'desc')->get();

        //otteengo un istanza di Book
        $book = Book::find(1);

        return view('book_list', compact('books')); // ['books' => $books]
    }


    /*
    public function addBook() {

        $newBook = new Book();
        $newBook->title = 'La Divina Commedia';
        $newBook->description = '';
        $newBook->author = "Dante Alighieri";
        $newBook->save();

    }

    public function editBook() {

        $divinaCommedia = Book::find(4);
        $divinaCommedia->title = $divinaCommedia->title . "***";
        $divinaCommedia->save();

    }
    */

 }
