<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function verify(Subscriber $subscriber): \Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        if (!$subscriber->hasVerifiedEmail()) {
            $subscriber->markEmailAsVerified();
        }

        return redirect('/?verified=1');
    }

    public function all()
    {
        return view(view:'subscribers.all')->with([
            'subscribers' => Subscriber::all(), //collect() for empty list
        ]);
    }
}
