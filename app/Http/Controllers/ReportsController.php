<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Books;

class ReportsController extends Controller
{
    protected $booksModel;
    
    public function __construct(Books $booksModel)
    {
        if (Auth()->check() == false) {
            // Not logged in, redirect to login page
            header("Location: /auth/login");
            exit();
        }
        
        $this->booksModel = $booksModel;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
    public function bookLoans()
    {
        $books = $this->booksModel->getBooksOnLoan();
        
        return response()->view('reports.bookloans', array('books' => $books));
    }

    public function bookBalance()
    {
        $books = $this->booksModel->getAllBooks();
        
        return response()->view('reports.balance', array('books' => $books));
    }
}
