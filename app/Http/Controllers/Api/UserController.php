<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|regex:/^[a-zA-Z-. ]+$/|max:50',
            'email'=>'required|email|unique:users',
            'phone_number'=>'required|numeric|digits:10',
            'password'=>'required|min:6',
            'address'=>'required',
            'country'=>'required',
            'gender'=>'required',
            'state'=>'required'
        ],[
            'name.required'=>"Name field can't be empty",
            'name.regex'=>'Name may only contains alphabets',
            'phone_number.required'=>"Phone number can't be empty",
            'phone_number.numeric'=>'Phone number may only contains numbers',
            'phone_number.digits'=>'Phone number may not be greatere than 10 digits',
            'password.required'=>"Password can't be empty",
            'passsword.min'=>'Password must have minimum of 6 chars',
        ]);

        if ($validator->fails()) {
            return response()->json(['response'=>$validator->errors()],409 );
        }
        $data = $request->all();

        $register = $this->userService->register($data);

        if ($register) {
//            $token = $register->createToken('apiToken')->accessToken;
            return response()->json(['response'=>'User Registered Successfully','data'=>$register],200);
        }else{
            return response()->json(['response'=>'Error occured']);
        }

    }

}
