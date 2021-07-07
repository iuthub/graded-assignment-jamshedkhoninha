<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Table name
    protected $table = 'tasks';
    //Primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
