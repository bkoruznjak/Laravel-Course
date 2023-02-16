<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Int_;

class Subscribers extends Component
{
    public $subscribers;

    public function mount()
    {

    }

    public function delete(Subscriber $subscriber)
    {
       $subscriber->delete();
    }

    public function render()
    {
        $this->subscribers = Subscriber::all();

        return view('livewire.subscribers')->with([
            'subscribers' => $this->subscribers, //collect() for empty list
        ]);
    }
}
