<?php

namespace App\Http\Controllers;

use DB;

class ApiMainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function secureLogin_get()
    {
        return response()->json('todo bien', 201);
    }
}
