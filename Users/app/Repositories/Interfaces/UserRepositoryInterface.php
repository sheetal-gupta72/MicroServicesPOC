<?php
namespace App\Repositories\Interfaces;

interface UserRepositoryInterface
{
    public function getAllUsers();
    public function getUserById($id);
    public function createUser(array $userDetails);
    public function updateUser($id, array $newDetails);
    public function deleteUser($id);
}
