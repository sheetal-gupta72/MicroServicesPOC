<?php
namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->getAllUsers();
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }
    public function createUser($userDetails)
    {
        return $this->userRepository->createUser($userDetails);
    }
    public function updateUser($id, $newDetails)
    {
        return $this->userRepository->updateUser($id, $newDetails);
    }
    public function deleteUser($id)
    {
        return $this->userRepository->deleteUser($id);
    }

}
