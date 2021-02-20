<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Comment;
use Livewire\Component;

class CommentsSection extends Component
{
    public $car;
    public $username;
    public $body;

    protected $rules = [
        'body' => 'required|min:4',
        'username' => 'required|string'
    ];

    public function mount(Car $car)
    {
        $this->car = $car;
    }

    public function submitForm()
    {
        $this->validate();

        Comment::create([
            'car_id' => $this->car->id,
            'username' => $this->username,
            'body' => $this->body
        ]);

        $this->resetForm();

        $this->car->refresh();
    }

    public function resetForm()
    {
        $this->body = "";
    }

    public function render()
    {
        return view('livewire.comments-section');
    }
}
