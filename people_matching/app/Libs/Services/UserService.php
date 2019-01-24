<?php

namespace App\Libs\Services;

use App\User;
use App\Libs\Contracts\UserContract;

class UserService implements UserContract
{
    private $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function createUser(array $data)
    {
        return $this->model->create($data);
    }

    public function getUser()
    {
        return $this->model->orderBy('name')->with('friend')->get();
    }

    public function getUserById(int $userId)
    {
        return $this->model->find($userId);
    }
}
