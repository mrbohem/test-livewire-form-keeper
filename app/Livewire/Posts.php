<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use App\Models\User;
use Livewire\Component;

class Posts extends Component
{

    #[Url(keep:true)] 
    public $search = '';
    public PostForm $user;

    public function updateFullName(){
        $this->user->fullName = $this->user->firstName . ' ' . $this->user->lastName;
    }

    public function refreshComp(){
        // dump($this->user);
    }

    public function render()
    {
        return view('livewire.posts');
    }
}