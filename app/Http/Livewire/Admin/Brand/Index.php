<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use App\Models\Admin\Categories;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $slug, $status, $brand_id, $category_id;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string',
            'category_id' => 'required|integer',
            'status' => 'nullable'
        ];
    }

    // Empty the all the fields after submit the fields
    public function resetInput()
    {
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
        $this->brand_id = NULL; // after delete the any id need to reset the form values 
        $this->category_id = NULL;
    }

    public function storeBrand()
    {
        $validatedData = $this->validate();
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
            'category_id' => $this->category_id,
        ]);

        session()->flash('message', 'Brand Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
        $this->resetInput();
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    public function render()
    {
        $categories = Categories::where('status', '0')->get();
        return view('livewire.admin.brand.index', ['categories' => $categories])
            ->extends('layouts.admin.app')
            ->section('content');
    }
}
