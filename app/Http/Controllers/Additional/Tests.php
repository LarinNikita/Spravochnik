<?php

namespace App\Http\Controllers\additional;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class Tests extends Controller
{
    public function getCsrf()
    {
        return csrf_token();
    }
}
