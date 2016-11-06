<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
//use Illuminate\Http\Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function __construct()
    {
        if (Auth()->check() == false) {
            // Not logged in, redirect to login page
            header("Location: /auth/login");
            exit();
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $input = array();
  
        $booksOnHand = $this->booksModel->getBookOnHandByUser(Auth()->user()->id);
        
        $bookAllowance = Auth()->user()->maximum_books_can_loan - count($booksOnHand);
        
        $books = $this->booksModel->getBooksByTitleAndAuthor($input);
        
        return response()->view('books.searchresults', array('books' => $books, 'book_allowance' => $bookAllowance));
    }
}
