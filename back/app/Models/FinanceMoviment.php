<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceMoviment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'lancamento',
        'valor',
        'movimento'
    ];
    
}
