<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participate;
use App\Models\User;
use Illuminate\Http\Request;

class ParticipatesController extends Controller
{
    public function ujEsemenyHozzaAd(Request $request){
        $event = new Event();
        $participate = new Participate();
        $participate->event_id = '2';
        $participate->user_id;
        $event->date = '2023-12-05';
        $participate->present = $request->present;
        $event->agency_id;
        $event->limit = $request->limit;
        $event->save();
        $participate->save();
    }

    public function jelenLet(Request $request){
        $participate = new Participate();
        $user = new User();
        $user -> name;
        $participate->present = $request->present;
        $user -> save();
        $participate->save();
    }
}
