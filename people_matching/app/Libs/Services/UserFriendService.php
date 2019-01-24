<?php

namespace App\Libs\Services;

use App\UserFriend;
use App\Libs\Contracts\UserFriendContract;

class UserFriendService implements UserFriendContract
{
    private $model;

    public function __construct(UserFriend $model)
    {
        $this->model = $model;
    }

    public function createFriend(array $data)
    {
        return $this->model->create($data);
    }
}
