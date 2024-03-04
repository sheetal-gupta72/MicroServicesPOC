<?php

namespace App\Http\Controllers;

use App\Helpers\NetworkHelper;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $response = NetworkHelper::get(env('ORDER_BASE_URL').'order');
        if ($response->successful()) 
            return $response->json();   

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    public function store(Request $request)
    {
        $response = NetworkHelper::post(env('ORDER_BASE_URL').'order', $request->all());
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to create data'], $response->status());
    }

    public function show($id) 
    {
        $response = NetworkHelper::get(env('ORDER_BASE_URL')."order/$id");
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    public function update(Request $request, $id)
    {
        $response = NetworkHelper::put(env('ORDER_BASE_URL')."order/$id", $request->all());
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to update'], $response->status());
    }

    public function destroy(string $id)
    {
        $response = NetworkHelper::delete(env('ORDER_BASE_URL')."order/$id");
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to delete data'], $response->status());
    }

}
