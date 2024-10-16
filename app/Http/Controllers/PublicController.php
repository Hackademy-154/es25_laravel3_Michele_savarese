<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{function homepage() {
    $title = 'Blog di LudoDelta';
    return view('welcome',['title'=> $title]);
}
    //
};
