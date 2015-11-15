<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $ganzername = [];
        $ganzername['name1'] = 'Daniel';
        $ganzername['name2'] = 'Zomji';
        return view('pages.about', $ganzername);
    }

    public function contact()
    {
        return view('pages.contact');
    }
}