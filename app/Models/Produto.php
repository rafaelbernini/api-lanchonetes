<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'categoria', 'preco', 'lanchonete_id'];

    public function lanchonete()
    {
        return $this->belongsTo(Lanchonete::class);
    }
}
