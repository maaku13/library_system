<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'books';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'author', 'isbn', 'quantities', 'shelf_location'];
    
    public function getAllBooks()
    {   
        $query = $this->getModel()
                ->select(
                    'id',
                    'title',
                    'author',
                    'isbn',
                    'quantities',
                    'shelf_location',
                    DB::raw("(IFNULL((SELECT COUNT(loans.book_id) FROM book_loans AS loans WHERE loans.book_id = books.id AND loans.date_returned = '0000-00-00'), 0)) AS on_loan"),
                    DB::raw("(IFNULL((books.quantities) - (SELECT COUNT(loans.book_id) FROM book_loans AS loans WHERE loans.book_id = books.id AND loans.date_returned = '0000-00-00'), books.quantities)) AS available")
                )
                ->get();
        
        return $query;
    }
    
    public function getBooksOnLoan()
    {
        $query = $this->getModel()
                ->select(
                    'books.id',
                    'book_loans.id AS book_load_id', 
                    'title',
                    'author',
                    'book_loans.date_barrowed',
                    'book_loans.date_expiry',
                    DB::raw("(CASE WHEN (DATEDIFF('".date("Y-m-d")."', book_loans.date_expiry)) < 0 THEN 0 ELSE (DATEDIFF('".date("Y-m-d")."', book_loans.date_expiry)) * 2 END) AS amount"),
                    'users.last_name',
                    'users.first_name'
                )
                ->join("book_loans", "book_loans.book_id", "=", "books.id")
                ->join("users", "book_loans.user_id", "=", "users.id")
                ->where("book_loans.date_returned", "=", "0000-00-00")
                ->get();
        
        return $query;
        
    }
    
    public function getBookOnHandByUser($userId)
    {
        $query = $this->getModel()
                ->select(
                    'books.id',
                    'book_loans.id AS book_load_id', 
                    'title',
                    'author',
                    'book_loans.date_barrowed',
                    'book_loans.date_expiry',
                    DB::raw("(CASE WHEN (DATEDIFF('".date("Y-m-d")."', book_loans.date_expiry)) < 0 THEN 0 ELSE (DATEDIFF('".date("Y-m-d")."', book_loans.date_expiry)) * 2 END) AS amount")
                )
                ->join("book_loans", "book_loans.book_id", "=",  "books.id")
                ->where("book_loans.user_id", "=", $userId)
                ->where("book_loans.date_returned", "=", "0000-00-00")
                ->get();
        
        return $query;
    }
    
    public function getBooksByTitleAndAuthor($search)
    {   
         $query = $this->getModel()
                ->select(
                    'id',
                    'title',
                    'author',
                    'isbn',
                    'quantities',
                    'shelf_location',
                    DB::raw("(IFNULL((SELECT COUNT(loans.book_id) FROM book_loans AS loans WHERE loans.book_id = books.id AND loans.date_returned = '0000-00-00'), 0)) AS on_loan"),
                    DB::raw("(IFNULL((books.quantities) - (SELECT COUNT(loans.book_id) FROM book_loans AS loans WHERE loans.book_id = books.id AND loans.date_returned = '0000-00-00'), books.quantities)) AS available")
                )
                ->where(DB::raw("title LIKE '%".$search['title']."%' OR author LIKE '%".$search['author']."%'"))
                ->get();
         
        return $query;
    }
}
