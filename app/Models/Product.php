<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[

        'Name',
        'Price',
        'Quantity',
        'description'

    ];
/**
         * The Category that belong to the Product
         *
    
         */
        public function categories()
        {
            return $this->belongsToMany(Category::class);
        }
    }

