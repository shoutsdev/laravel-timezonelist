<?php

namespace App\Http\Controllers;

use App\Models\Timezone;


class TimezoneController extends Controller
{
    public function index()
    {
        $timezones = Timezone::Orderby('offset')->get();

        return view('timezone.timezonelist', compact('timezones'));
    }
}
