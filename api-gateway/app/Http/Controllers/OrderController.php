<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function userOrders($userId)
    {
        $response = Http::get("localhost:8001/api/order");
        return $response->json();
    }
}
