<?php

namespace App\Http\Controllers;

use Faker\Provider\Base;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
