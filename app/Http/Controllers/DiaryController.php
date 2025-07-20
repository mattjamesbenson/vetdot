<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Appointment;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function __invoke()
    {
        $events = [];
 
        $appointments = Appointment::with(['client', 'employee'])->get();
 
        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->client->name . ' ('.$appointment->employee->name.')',
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }
 
        return view('diary', compact('events'));
    }
}
