<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];
    
    protected $table = 'categories';

    public function Products() {
        return $this->hasMany(Product::class);   //relasi tabel produk ke tabel category. satu product memiliki satu kategori
    }
}
