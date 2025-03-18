<?php

namespace App\Http\Controllers\Api;

use App\Concerns\JsonResponse;
use App\Http\Controllers\Controller;

class BaseApiController extends Controller
{
    use JsonResponse;
}
