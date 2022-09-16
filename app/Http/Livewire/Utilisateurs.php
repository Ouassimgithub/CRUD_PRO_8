<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public function render()
    {
        
        return view ('livewire.utilisateurs.index', [
            "users" => User::paginate(10)
        ])
              ->extends("layouts.master")
                ->section("contenu");
    }
}    
