<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function addSensor(Request $request) {

        $incomingFields = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'state' => 'required',
            'maxTemp' => 'required',
            'minTemp' => 'required',
            'maxHum' => 'required',
            'minHum' => 'required'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['location'] = strip_tags($incomingFields['location']);
        $incomingFields['state'] = strip_tags($incomingFields['state']);
        $incomingFields['maxTemp'] = strip_tags($incomingFields['maxTemp']);
        $incomingFields['minTemp'] = strip_tags($incomingFields['minTemp']);
        $incomingFields['maxHum'] = strip_tags($incomingFields['maxHum']);
        $incomingFields['minHum'] = strip_tags($incomingFields['minHum']);
        $incomingFields['user_id'] = auth()->id();

        Sensor::create($incomingFields);

        return redirect('/lista-sensores');
    
    }

}
