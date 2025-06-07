<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layout;

class LayoutController extends Controller
{
    public function index()
    {
        $layouts = Layout::all();
        return view('layouts', compact('layouts'));
    }
}

