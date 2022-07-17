<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function index()
    {
        try {
            $userPaginate = $this->userRepository->paginate(request()->all());
            
            return response()->json([
                'status' => true,
                'data' => [
                    'user' => $userPaginate->items(),
                    'meta' => [
                        'current_page'=> $userPaginate->currentPage(),
                        'total'=> $userPaginate->total(),

                    ]
                ]
            ]);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => env('APP_ENV')!='production' ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }

    public function update(UserStoreRequest $request, $id) {
        try {
            $user = $this->userRepository->save($request->only('name','email','password','phone','address'), $id);
            return response()->json([
                'status' => true,
                'data' => [
                    'user' => $user
                ]
            ]);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => env('APP_ENV')!='production' ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }

    public function store(UserStoreRequest $request)
    {
        try {
          //  $user = $this->userRepository->save($request->only('name','email','password','phone','address')); // insert
            $user = $this->userRepository->save(request()->only('name','email','password','phone','address')); 
            return response()->json([
                'status' => true,
                'data' => [
                    'user' => $user
                ]
            ]);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => env('APP_ENV')!='production' ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }

    public function show($id)
    {
        try {
            $user = $this->userRepository->find($id);
            
            return response()->json([
                'status' => true,
                'data' => [
                    'user' => $user
                ]
            ]);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => env('APP_ENV')!='production' ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }
    public function destroy($id)
    {
        try {
            $result = $this->userRepository->delete([$id]);
            
            return response()->json([
                'status' => $result ? true : false
            ]);
        } 
        catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => env('APP_ENV')!='production' ? $e->getMessage() : 'Something went wrong'
            ]);
        }
    }
}
