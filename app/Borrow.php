<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class Borrow extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [       
        'borrow_date', 
        'return_date',

        //FK
        'user_id',
        'item_id', 
        'borrow_type', 
    ];
    protected $primaryKey = 'borrow_id';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function item()
    {   
        return $this->hasOne('App\Item', 'item_id', 'item_id');
    }

    public function borrowType()
    {
        return $this->hasOne('App\BorrowType', 'borrow_type', 'borrow_type');
    }
}
