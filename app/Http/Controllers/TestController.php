<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    function test () {
        return "Yes! Successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }

}
