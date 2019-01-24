<?php

namespace App\Http\Controllers;

use App\Libs\Services\UserFriendService;
use Illuminate\Http\Request;

class UserFriendController extends Controller
{
    public function store(Request $request, UserFriendService $service)
    {
        $data = $request->all();
        $friend = $service->createFriend($data);

        if ($friend === null) {
            return response()->json([
                'data' => '',
                'msg' => 'add new friend failed'
            ]);
        } else {
            return response()->json([
                'data' => $friend,
                'msg' => 'success'
            ]);
        }
    }
}
