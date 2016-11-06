<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class BookLoans extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'book_loans';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['book_id', 'user_id', 'date_barrowed', 'date_expiry', 'date_returned', 'amount', 'status'];
    
}
