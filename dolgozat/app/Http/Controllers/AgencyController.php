<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function withes(){
        return Agency::with(['events', 'participations'])->get();
    }

    

}
