<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Admin\Categories;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Categories::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.categories.index', ['categories' => $categories]);
    }
}
