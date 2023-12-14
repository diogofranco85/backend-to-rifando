<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    /**
     * @return mixed
     */
    public function index(Request $request): mixed
    {
        return view("home");
    }
}
