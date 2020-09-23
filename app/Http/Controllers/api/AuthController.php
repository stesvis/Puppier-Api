<?php

namespace App\Http\Controllers\api;

use App\DTOs\ErrorDTO;
use App\DTOs\TokenDTO;
use App\Http\Resources\ErrorResource;
use App\Http\Resources\TokenResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends BaseApiController
{
    public function token(Request $request)
    {
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required',
//            'device_name' => 'required',
//        ]);
//
//        $user = User::where('email', $request->email)->first();
//
//        if (!$user || !Hash::check($request->password, $user->password)) {
//            throw ValidationException::withMessages([
//                'email' => ['The provided credentials are incorrect.'],
//            ]);
//        }
//
//        return $user->createToken($request->device_name);

        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
                'device_name' => 'required',
            ]);
            $credentials = $request->only('email', 'password');

            // TRUE if authentication was successful
            if (!Auth::attempt($credentials)) {
                $errorDto = new ErrorDTO();
                $errorDto->code = Response::HTTP_UNAUTHORIZED;
                $errorDto->message = 'Unauthorized.';

                return (new ErrorResource($errorDto))->response()->setStatusCode(Response::HTTP_UNAUTHORIZED);
            }

            // Find the user
            $user = User::where('email', $request->email)->first();

            // Check the password
            if (!$user || !Hash::check($request->password, $user->password)) {
                return (new ErrorResource($errorDto))->response()->setStatusCode(Response::HTTP_BAD_REQUEST);
            }

            $token = $user->createToken($request->device_name);

            return new TokenResource(new TokenDTO($token->plainTextToken, 'Bearer'));
        } catch (\Exception $ex) {
            return parent::handleException($ex);
        }
    }
}
