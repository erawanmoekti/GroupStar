<?php

namespace App\Libs\Contracts;

interface UserContract
{
    public function createUser(array $data);

    public function getUser();

    public function getUserById(int $userId);
}