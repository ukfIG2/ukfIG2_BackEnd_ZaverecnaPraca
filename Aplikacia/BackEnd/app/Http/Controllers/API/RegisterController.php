<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Administration;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;



class RegisterController extends BaseController
{
    public function register(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'Login' => 'required',
            #'email' => 'required|email',
            'Password' => 'required',
            #'c_password' => 'required|same:password',
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
        $input = $request->all();
        $input['Password'] = $input['Password'];
        $Admin = Administration::create($input);
        $success['token'] =  $Admin->createToken('MyApp')->plainTextToken;
        $success['Login'] =  $Admin->Login;
        return $this->sendResponse($success, 'User register successfully. Login was'.$Admin->Login.'.Password was'.$Admin->Password);
    }
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
   /* public function login(Request $request): JsonResponse
    {
        if(Auth::attempt(['Login' => $request->Login, 'Password' => $request->Password])){ 
            $Admin = Auth::user(); 
            $success['token'] =  $Admin->createToken('MyApp')->plainTextToken; 
            $success['Login'] =  $Admin->Login;
            return $this->sendResponse($success, 'Admin login successfully.');
        }else{ 
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised Login was '.$request->Login.'. Password was'.$request->Password]);
        } 
    }*/


    /*public function login(Request $request): JsonResponse
    {
        Log::info('Attempting login with', ['Login' => $request->Login, 'Password' => $request->Password]);

        if(Auth::attempt(['Login' => $request->Login, 'Password' => $request->Password])){ 
            $Admin = Auth::user(); 
            $success['token'] =  $Admin->createToken('MyApp')->plainTextToken; 
            $success['Login'] =  $Admin->Login;

            Log::info('Login successful', ['Admin' => $Admin]);

            return $this->sendResponse($success, 'Admin login successfully.');
        }else{ 
            Log::warning('Login failed', ['Login' => $request->Login, 'Password' => $request->Password]);

            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised Login was '.$request->Login.'. Password was'.$request->Password]);
        } 
    }*/

    public function login(Request $request): JsonResponse
{
    $admin = Administration::where('Login', $request->Login)->first();

    if ($admin && Hash::check($request->Password, $admin->Password)) {
        // The passwords match...
        $success['token'] =  $admin->createToken('MyApp')->plainTextToken; 
        $success['Login'] =  $admin->Login;

        return $this->sendResponse($success, 'Admin login successfully.');
    }

    return $this->sendError('Unauthorised.', ['error'=>'Unauthorised requesst Login waas '.$request->Login.'. Password was'.$request->Password.' and admin password was '.$admin->Password]);
}

}
