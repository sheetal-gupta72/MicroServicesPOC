<?php
namespace App\Repositories;

use App\Models\Order;
use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($id)
    {
        return Order::findOrFail($id);
    }

    public function createOrder(array $OrderDetails)
    {
        return Order::create($OrderDetails);
    }

    public function updateOrder($id, array $newDetails)
    {
        return Order::whereId($id)->update($newDetails);
    }

    public function deleteOrder($id)
    {
        return Order::destroy($id);
    }
}
