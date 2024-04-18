<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'purchase_url', 'company', ' ', 'created_at', 'updated_at'];
<<<<<<< HEAD

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
=======
>>>>>>> 80067199880a2d7d0349f6e0cfa005434ef4d60f
}
