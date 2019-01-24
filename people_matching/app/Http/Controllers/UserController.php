<?php

namespace App\Http\Controllers;

use App\Libs\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UserService $service)
    {
        $data = $service->getUser();

        return response()->json([
            'data' => $data,
            'msg' => 'success'
        ]);
    }

    public function match(Request $request, UserService $service)
    {
        $firstUser  = $service->getUserById($request->first_user);
        $secondUser = $service->getUserById($request->second_user);

        if ( $firstUser->age != $secondUser->age) {
            return response()->json([
                'msg' => 'user not match. Different age'
            ]);
        }

        $firstFriend = $firstUser->friend->map(function ($item) {
            return $item->name;
        });
        $secondFriend = $secondUser->friend->map(function ($item) {
            return $item->name;
        });

        $sameFriend = $firstFriend->diff($secondFriend);
        if ($sameFriend->count() == $firstFriend->count()) {
            return response()->json([
                'msg' => 'user not match. No mutual friend'
            ]);
        }

        return response()->json([
            'msg' => 'user match.'
        ]);
    }

    public function show($id, UserService $service)
    {
        $user = $service->getUserById($id);

        if ($user === null) {
            return response()->json([
                'data' => '',
                'msg' => 'user not found'
            ]);
        } else {
            return response()->json([
                'data' => [
                    'user' => $user,
                    'friends' => $user->friend()->get()
                ],
                'msg' => 'success'
            ]);
        }
    }

    public function store(Request $request, UserService $service)
    {
        $data = $request->all();
        $user = $service->createUser($data);

        if ($user === null) {
            return response()->json([
                'data' => '',
                'msg' => 'add new user failed'
            ]);
        } else {
            return response()->json([
                'data' => $user,
                'msg' => 'success'
            ]);
        }
    }
}
