<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'name', 
        'email', 
        'logo',
        'webside',
    ];


    public function employes(){
        return $this->hasMany('App\Models\Employees');
    }
}
