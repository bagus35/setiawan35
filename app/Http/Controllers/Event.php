<?php

namespace App\Http\Controllers;

use App\Models\Event_Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Event extends Controller
{
    public function index()
    {
        $str   = Str::class;
        $event = Event_Model::orderBy('id', 'desc')->get();
        $datetime = Event_Model::select('publish')->get();

        $current = Carbon::now();
        $dt      = Carbon::yesterday();
        $data = [
            'current' => $current->diffInHours($dt),
        ];

        return view('pages.event_kampus', compact('event', 'str', 'data'));
    }

    public function show($slug_event)
    {
        $event = Event_Model::where('slug_event', $slug_event)->first();
        $event_populer = Event_Model::orderBy('id', 'desc')->take(4)->get();

        return view('pages.event_kampus_detail', compact('event', 'event_populer'));
    }
}
