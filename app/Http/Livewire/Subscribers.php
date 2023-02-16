<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Int_;

class Subscribers extends Component
{
    public $subscribers;
    public $search = '';

    protected $queryString = [
      'search' => ['except' => '']
    ];

    public function mount()
    {

    }

    public function delete(Subscriber $subscriber)
    {
       $subscriber->delete();
    }

    public function render()
    {
        $this->subscribers = Subscriber::where('email','like',"%{$this->search}%")->get();

        return view('livewire.subscribers')->with([
            'subscribers' => $this->subscribers, //collect() for empty list
        ]);
    }
}
