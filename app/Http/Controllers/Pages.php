<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function services() {
        $data = (
            ['title' => 'Our services',
            'services' => ['Web development', 'Hacking', 'Fishing']
            ]
        );
        return view('services')->with($data);
    }
}