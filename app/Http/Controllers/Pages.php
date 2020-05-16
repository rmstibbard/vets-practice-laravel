<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function services() {
        $data = (
            ['title' => 'Our services',
            'services' => ['Web development', 'Hacking', 'Fishing', 'Dogs teeth']
            ]
        );
        return view('services')->with($data);
    }
    public function about() {
        return view ('about');
    }
    public function contact() {
        return view ('contact');
    }
}