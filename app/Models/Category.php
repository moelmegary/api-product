<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=[

        'Name',

    ];

    /**
     * The Product that belong to the Category
    **/
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
