<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'created_at',
        'updated_at',
    ];

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $category = Category::all();
        return response()->json($category);
    }

    /**
     * @param $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $category = Category::query()->find($id);
        return response()->json($category);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $category = Category::query()->create($request->all());
        return response()->json($category->id);
    }

    /**
     * @param mixed $request
     * @param mixed $id
     * 
     * @return JsonResponse
     */
    public function alter(Request $request, $id): JsonResponse
    {
        $category = Category::query()->find($id);
        $category->name = $request->name;
        $category->save();
        return response()->json($category);
    }

    /**
     * @param mixed $id
     * 
     * @return JsonResponse
     */
    public function remove($id): JsonResponse
    {
        $category = Category::query()->find($id);
        $category->delete();
        return response()->json($category);
    }
}
