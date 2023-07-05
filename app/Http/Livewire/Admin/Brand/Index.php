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

    public function render()
    {
        $brands = Brand::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.brand.index', ['brands' => $brands]);
    }
}
