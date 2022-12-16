<?php

namespace App\Http\Controllers\additional;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tests extends Controller
{
    public function getCsrf()
    {
        return csrf_token();
    }
}
