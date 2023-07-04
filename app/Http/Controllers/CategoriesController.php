<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriesRequest;
use App\Http\Requests\UpdateCategoriesRequest;
use App\Models\Categories;
use App\Models\Products;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categories::query()
            ->with('image')
            ->whereNull('parent_id')
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories,$alias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriesRequest $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
    public function getCategoriesById($id)
    {
        return Categories::query()
            ->with('image')
            ->where('id',$id)
            ->get();
    }

    public function getCategoriesByParentId($parentId)
    {
        return Categories::query()
            ->with('image')
            ->where('parent_id',$parentId)
            ->get();
    }

    public function getCategoryByAlias($alias)
    {
        $category = Categories::where('alias',$alias)
            ->first();

        return response()->json($category);
    }

    public function getChildCategoriesByAlias($alias)
    {
        $category = Categories::where('alias',$alias)
            ->first();

        if ($category) {
            $childCategories = $this->getCategoriesByParentId($category->id);

            return response()->json($childCategories, $childCategories->isNotEmpty() ? 200 : 400);
        }

        return response()->json(false,400);
    }
}
