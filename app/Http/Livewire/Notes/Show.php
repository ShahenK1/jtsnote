<?php

namespace App\Http\Livewire\Notes;

use App\Models\NoteItem;
use Livewire\Component;

class Show extends Component
{
    protected $listeners = ['saved'];

    public function render()
    {
        $list = NoteItem::all()->sortByDesc('created_at');

        return view('livewire.notes.show', ['list' => $list]);
    }

    public function saved()
    {
        $this->render();
    }

    public function markLiked(NoteItem $item)
    {
        $item->like = true;
        $item->save();
    }

    public function markNoLike(NoteItem $item)
    {
        $item->like = false;
        $item->save();
    }

    public function deleteItem(NoteItem $item)
    {
        $item->delete();
    }
}



