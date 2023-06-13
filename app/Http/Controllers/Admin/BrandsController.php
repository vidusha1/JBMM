<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Categories;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BrandFormRequest;

class BrandsController extends Controller
{
    public function index()
    {
        return view('pages.admin.brands.index');
    }

    public function create()
    {
        $categories = Categories::all();
        return view('pages.admin.brands.create', compact('categories'));
    }

    public function store(BrandFormRequest $request)
    {
        $validatedData = $request->validated();
        $brand = new Brand;

        $brand->category_id = $validatedData['category_id'];
        $brand->name = $validatedData['name'];
        $brand->slug = Str::slug($validatedData['slug']);
        $brand->status = $request->status == true ? '1' : '0';

        $brand->save();
        return redirect(route('brands'))->with('message', 'Brand Created Successfully');
    }

    public function edit(Brand $brand)
    {
        $categories = Categories::all();
        return view('pages.admin.brands.edit', compact('brand', 'categories'));
    }
}
