<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user1 extends Model
{

    use HasFactory;

    protected $table = "Authors";
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
    ];    


    protected $appends = ['fullname'];
    public function getFullnameAttribute()
    {
        return $this->fname . ' ' . $this->lname;
    }
   

}
