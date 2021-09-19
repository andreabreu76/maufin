<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceMoviment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uuid',
        'category_id',
        'lancamento',
        'valor',
        'movimento',
        'vencimento',
        'coust_center_id'
    ];

    public function index()
    {
        return FinanceMoviment::all();
    }

    public function store($data)
    {
        $financeMoviment = FinanceMoviment::create($data);
        return response()->json($financeMoviment, 201);
    }

    public function show($id)
    {
        $financeMoviment = FinanceMoviment::find($id);
        return response()->json($financeMoviment, 200);
    }

    public function alter($data, $id)
    {
        $financeMoviment = FinanceMoviment::find($id);
        $financeMoviment->update($data);
        return response()->json($financeMoviment, 200);
    }

    public function remove($id)
    {
        $financeMoviment = FinanceMoviment::find($id);
        $financeMoviment->delete();
        return response()->json(null, 204);
    }
}
