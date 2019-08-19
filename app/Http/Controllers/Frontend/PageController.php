<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('Frontend.index');
        }
        return false;
    }
}
