<?php

namespace App\Http\Controllers;

use App\Events\ContactEvent;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $request = $request->all();

            // Event to contact us for a reservation
            event(new ContactEvent($request));

            return redirect()->back()->with('message','Your request has been well registered  !   We will get back to you as soon as possible');
    }
}
