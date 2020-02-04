<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'firstname', 
        'lastname', 
        'companies_id',
        'email',
        'phone', 
    ];


    public function companies(){
        return $this->hasOne('App\Models\Companies','id', 'companies_id');
    }

}
