<?php

namespace App\Livewire;

use App\Models\Category; // <--- TAMBAHKAN BARIS INI
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categories - DCodeMania')]
class CategoriesPage extends Component
{
    public function render()
    {
        // Sekarang PHP tahu kalau Category itu ada di App\Models
        $categories = Category::where('is_active', 1)->get();
        
        return view('livewire.categories-page', [
            'categories' => $categories,
        ]);
    }
}