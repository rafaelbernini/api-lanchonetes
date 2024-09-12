<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lanchonete extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'endereco'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
