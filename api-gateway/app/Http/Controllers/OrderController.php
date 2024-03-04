<?php

namespace App\Http\Controllers;

use App\Helpers\NetworkHelper;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $response = NetworkHelper::get('localhost:8002/api/order');
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    public function store(Request $request)
    {
        $response = NetworkHelper::post('localhost:8002/api/order', $request->all());
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to create data'], $response->status());
    }

    public function show($id) 
    {
        $response = NetworkHelper::get("localhost:8002/api/order/$id");
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    public function update(Request $request, $id)
    {
        $response = NetworkHelper::post("localhost:8002/api/order/$id", $request->all());
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to update'], $response->status());
    }

    public function destroy(string $id)
    {
        $response = NetworkHelper::delete("localhost:8002/api/order/$id");
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to delete data'], $response->status());
    }

    

    /* public function orders()
    {
        $response = NetworkHelper::get('localhost:8002/api/order');
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    }

    public function users()
    {
        $response = NetworkHelper::get('localhost:8003/api/user');
        if ($response->successful()) 
            return $response->json();

        return response()->json(['error' => 'Failed to fetch data'], $response->status());
    } */
}
