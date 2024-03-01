<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $OrderService;

    public function __construct(OrderService $OrderService)
    {
        $this->OrderService = $OrderService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Orders = $this->OrderService->getAllOrders();
        return response()->json($Orders);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $OrderData = $request->all(); // Validation should be handled here or in a Form Request
        $Order = $this->OrderService->createOrder($OrderData);
        return response()->json($Order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Order = $this->OrderService->getOrderById($id);
        return response()->json($Order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $OrderData = $request->all(); // Again, validate input
        $Order = $this->OrderService->updateOrder($id, $OrderData);
        return response()->json($Order);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->OrderService->deleteOrder($id);
        return response()->json(null, 204);
    }
}
