<?php

namespace App\Http\Livewire\Notes;

use App\Models\NoteItem;
use Livewire\Component;

class Form extends Component
{
    public $description;

    protected $rules = [
        'description' => 'required|min:4'
    ];

    public function render()
    {
        return view('livewire.notes.form');
    }

    public function createItem()
    {
        $this->validate();

        $item              = new NoteItem();
        $item->description = $this->description;
        $item->save();

        $this->emit('saved');
    }
}
