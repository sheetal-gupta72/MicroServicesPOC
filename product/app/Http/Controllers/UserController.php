<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function create(Request $request)
    {
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        Log::channel('api')->info('An informational message for the API log.');
        return User::create($request->all());
    }
}
