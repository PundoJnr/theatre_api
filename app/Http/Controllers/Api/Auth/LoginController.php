<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
    * Login user and generate API token
    *
    * @param Request $request
    * @return \Illuminate\Http\JsonResponse
    */
    public function login(Request $request){
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            $token =  $user->createToken('theatre')->accessToken;

            return response()->json([
                'authentication' => [
                    'token' => $token
                ]
            ], 200);
        }

        return $this->sendFailedLoginResponse($request);
   }

    /**
    * Logout user and invalidate API token
    *
    * @param Request $request
    * @return \Illuminate\Http\JsonResponse
    */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => "User logged out"
        ], 200);
    }
}
