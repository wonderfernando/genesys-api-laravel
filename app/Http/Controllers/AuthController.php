<?php

namespace App\Http\Controllers;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Resources\UserResource;
class AuthController extends Controller
{
    private $authService;
    public function __construct(AuthService $authService)  {
        $this->authService = $authService;
    } 
    public function login(AuthLoginRequest $request) {   
        $input = $request->validated();
        $token = $this->authService->login($input['phone'], $input['password']);
        return 
                (new UserResource(auth()->user()))->additional(['access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60,]
        );
    }
    public function register(AuthRegisterRequest $request)
    {
        $input = $request->validated();
        $user = $this->authService->register($input["name"], $input["phone"], $input["password"],$request["role"]);
        return new UserResource($user);
    }
    public function getUser()
    {
        return response()->json(auth()->user());
    }
}