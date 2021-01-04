<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
class VolunteerController extends Controller
{
    //

    public function joinForm(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();
        return view('home.volunteer', compact('event'));
    }

    public function join(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'phone_number' => ['required', 'string', 'min:7', 'max:9', 'unique:volunteers'],
        ]);
        $vol = new Volunteer();
        $vol->name = $request->name;
        $vol->phone_number = $request->phone_number;
        $vol->event_id = $request->event_id;
        $vol->save();
        return redirect('/home');

    }

}
