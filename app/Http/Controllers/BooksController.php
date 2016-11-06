<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Books;
use App\BookLoans;

class BooksController extends Controller
{
    protected $booksModel;
    protected $bookLoansModel;
    
    public function __construct(Books $booksModel, BookLoans $bookLoansModel)
    {
        if (Auth()->check() == false) {
            // Not logged in, redirect to login page
            header("Location: /auth/login");
            exit();
        }
        
        $this->booksModel = $booksModel;
        $this->bookLoansModel = $bookLoansModel;
    }
    
    /**
     * Display the books
     *
     * @return \Illuminate\Http\Response
     */
    public function listBooks()
    {
        $books = $this->booksModel->getAllBooks();
        
        return response()->view('books.list', array('books' => $books));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBook($id)
    {
        $book = Books::findOrFail($id);
        
        return response()->view('books.show', array("book" => $book));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth()->user()->user_type == 'MEMBER') {
            $input = array(
                'title' => '',
                'author' => ''
            );

            $booksOnHand = $this->booksModel->getBookOnHandByUser(Auth()->user()->id);

            $bookAllowance = Auth()->user()->maximum_books_can_loan - count($booksOnHand);

            $books = $this->booksModel->getBooksByTitleAndAuthor($input);

            return response()->view('books.searchresults', array('books' => $books, 'book_allowance' => $bookAllowance, 'page_title' => 'Books'));
        } else {
            $books = $this->booksModel->getAllBooks();

            return response()->view('books.list', array('books' => $books));
        }
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
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Books::create($input);

        return redirect()->to('/books/manage');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $book = Books::findOrFail($id);
        
        return response()->view('books.update', array('book' => $book));
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
        $book = Books::findOrFail($id);

        $input = $request->all();

        $book->fill($input)->save();

        return redirect()->to('/books/manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrFail($id);

        $book->delete();

        return redirect()->to('/books/manage');
    }
    
    public function searchBook()
    {
        return response()->view('books.search', array());
    }
    
    public function searchBookResults(Request $request)
    {
        $input = $request->all();
  
        $booksOnHand = $this->booksModel->getBookOnHandByUser(Auth()->user()->id);
        
        $bookAllowance = Auth()->user()->maximum_books_can_loan - count($booksOnHand);
        
        $books = $this->booksModel->getBooksByTitleAndAuthor($input);
        
        return response()->view('books.searchresults', array('books' => $books, 'book_allowance' => $bookAllowance, 'page_title' => 'Search Results'));
    }
    
    public function booksOnHand()
    {
        $books = $this->booksModel->getBookOnHandByUser(Auth()->user()->id);
        
        return response()->view('books.onhand', array('books' => $books));
    }
    
    public function returnBook(Request $request, $id)
    {
        $book = $this->bookLoansModel->findOrFail($id);

        $datediff = date_diff(date_create(date("Y-m-d")), date_create($book->date_expiry));

        $amount = 0;
        if($datediff->format("%a") < 0) {
            $amount = 0;
        } else {
            $amount = $datediff->format("%a") * 2;
        }
                
        $input = array(
            "date_returned" => date("Y-m-d"),
            "amount" => $amount
        );

        $book->fill($input)->save();

        return redirect()->to('/books/return');
    }
    
    public function barrowBook($id)
    {
        $input = array(
            "book_id" => $id,
            "user_id" => Auth()->user()->id,
            "date_barrowed" => date("Y-m-d"),
            "date_expiry" => date('Y-m-d', strtotime("+14 days"))
        );
        
        $this->bookLoansModel->create($input);

        return redirect()->to('/books/return');
    }
}
