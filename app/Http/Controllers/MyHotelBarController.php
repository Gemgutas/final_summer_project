<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyHotelBar;

class MyHotelBarController extends Controller
{
    public function index() {
        $bars = MyHotelBar::get();

        return inertia('MyHotelBar',[
            'bars'=> $bars
        ]);
    }
}
