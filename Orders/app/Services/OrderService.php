<?php
namespace App\Services;

use App\Repositories\Interfaces\OrderRepositoryInterface;

class OrderService
{
    protected $OrderRepository;

    public function __construct(OrderRepositoryInterface $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }

    public function getAllOrders()
    {
        return $this->OrderRepository->getAllOrders();
    }

    public function getOrderById($id)
    {
        return $this->OrderRepository->getOrderById($id);
    }
    public function createOrder($OrderDetails)
    {
        return $this->OrderRepository->createOrder($OrderDetails);
    }
    public function updateOrder($id, $newDetails)
    {
        return $this->OrderRepository->updateOrder($id, $newDetails);
    }
    public function deleteOrder($id)
    {
        return $this->OrderRepository->deleteOrder($id);
    }

}
