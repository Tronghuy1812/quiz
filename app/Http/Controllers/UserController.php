<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use PhpParser\Node\Stmt\TryCatch;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    }

    public function store(UserStoreRequest $request) {

        try {
            $inputs= $request->only('name','email','phone','adress');
            
            $inputs['password']= bcrypt('123@');
            $user =User::create($inputs);

            return response()->json([
                'status'=> true,
                'data'  => $user,
                'url'   => route('home')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message'=> $e->getMessage()
            ]);
        }

    }   
}
