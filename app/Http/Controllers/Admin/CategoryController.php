<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\Admin\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\CategoryFormRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('pages.admin.category.index');
    }

    public function create()
    {
        return view('pages.admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
        $validatedData = $request->validated();
        $category = new Categories;

        $category->title = $validatedData['title'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/category/';
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/category/', $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;

        $category->save();
        return redirect(route('categories.index'))->with('message', 'Category Added Successfully');
    }

    public function edit(Categories $category)
    {
        return view('pages.admin.category.edit', compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validated();
        $category = Categories::findOrFail($category);

        $category->title = $validatedData['title'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];

        if ($request->hasFile('image')) {
            $uploadPath = 'uploads/category/';
            $path = 'uploads/category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;

            $file->move('uploads/category/', $filename);
            $category->image = $uploadPath . $filename;
        }

        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];
        $category->status = $request->status == true ? '1' : '0';
        $category->created_by = Auth::user()->id;

        $category->update();
        return redirect(route('categories.index'))->with('message', 'Category Updated Successfully');
    }

    public function destroy($category)
    {
        $category = Categories::findOrFail($category);
        $path = 'uploads/category/' . $category->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $category->delete();
        session()->flash('message', 'Category has been deleted');
        return redirect()->back()->with('message', 'Category Been Deleted');
    }
}
