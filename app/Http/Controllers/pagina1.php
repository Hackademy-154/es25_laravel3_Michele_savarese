<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagina1 extends Controller
{function page1() {
    $title = 'Blog di LudoDelta';
    return view('pagina1',['title'=> $title]);
}
    //
}
