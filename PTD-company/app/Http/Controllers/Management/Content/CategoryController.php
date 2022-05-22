<?php

namespace App\Http\Controllers\Management\Content;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategoryRequest;
use App\Models\Content\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $parentsCate = Category::where('id', null)->get();
        return view('dashboard.content.category-management', ['categories' => $categories]);
    }

    public function store(CreateCategoryRequest $request)
    {
        $data = $request->validated();
        Category::create($request->only('name', 'slug', 'cate_id'));
        return redirect()->route('category')->with('success', 'دسته‌بندی با موفقیت ایجاد شد.');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();
        return back()->with('success', 'دسته‌بندی با موفقیت حذف شد.');
    }
}
