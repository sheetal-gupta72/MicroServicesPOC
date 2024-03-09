<?php

namespace App\Http\Controllers;

use App\Helpers\NetworkHelper;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $response = NetworkHelper::get(env('USER_BASE_URL') . 'user');
        return $response;
    }

    public function show($id)
    {
        $response = NetworkHelper::get(env('USER_BASE_URL') . "user/$id");
        if ($response->successful())
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    // public function store(Request $request)
    // {
    //     $response = NetworkHelper::post(env('USER_BASE_URL')."user", $request->all());
    //     if ($response->successful()) 
    //         return $response->json();

    //     return response()->json(['error' => 'Failed to fetch data'], $response->status());
    // }

    // public function update(Request $request, $id)
    // {
    //     $response = NetworkHelper::put(env('USER_BASE_URL')."user/$id", $request->all());
    //     if ($response->successful()) 
    //         return $response->json();

    //     return response()->json(['error' => 'Failed to fetch data'], $response->status());
    // }

    // public function destroy($id)
    // {
    //     $response = NetworkHelper::delete(env('USER_BASE_URL')."user/$id");
    //     if ($response->successful()) 
    //         return $response->json();

    //     return response()->json(['error' => 'Failed to fetch data'], $response->status());
    // }

}
