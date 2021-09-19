<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class Costcenter extends Model
{
    use HasFactory;

    const ACTIVE = 1;
    const INACTIVE = 0;

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'created_by',
        'updated_by',
    ];

    /**
     * @return Costcenter[]|Collection
     */
    public function index()
    {
        return Costcenter::all();
    }

    /**
     * @param $data
     * @return JsonResponse
     */
    public function store($data): JsonResponse
    {
        $costcenter = Costcenter::query()->create($data);
        return response()->json($costcenter, 201);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $costcenter = Costcenter::query()->find($id);
        return response()->json($costcenter, 200);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function alter(Request $request, $id): JsonResponse
    {
        $costcenter = Costcenter::query()->find($id);
        $costcenter->update($request->all());
        return response()->json($costcenter, 200);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function erase($id): JsonResponse
    {
        $costcenter = Costcenter::query()->find($id);
        $costcenter->delete();
        return response()->json(null, 204);
    }
}
