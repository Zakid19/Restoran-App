<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('frontend.menu.index', [
            'menus' => Menu::all(),
        ]);
    }
}
