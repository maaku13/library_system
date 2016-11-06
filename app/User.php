<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password', 'last_name', 'first_name', 
            'birthday', 'user_type', 'address', 'maximum_books_can_loan'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
    
    public function getAllMembers()
    {
        $query = $this->getModel()
                ->select(
                    'id',
                    'email',
                    'last_name',
                    'first_name',
                    'user_type',
                    'maximum_books_can_loan',
                    DB::raw("(IFNULL((SELECT COUNT(loans.book_id) FROM book_loans AS loans WHERE loans.user_id = users.id AND loans.date_returned = '0000-00-00'), 0)) AS current_books_on_hand")
                )
                ->get();
        
        return $query;
    }
}
