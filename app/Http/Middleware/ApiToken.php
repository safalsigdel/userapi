<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class ApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->header('Authorization')){

            $status =$this->checkToken($request->header('Authorization'));
            if ($status) {
                session('userToken', $request->header('Authorization'));
                return $next($request);
            }else{
                return response()->json(['message'=>'Not a valid Api request']);
            }


        }else{
            return response()->json([
                'message' => 'Not a valid API request.',
            ]);

        }
    }

    public function checkToken($apiToken)
    {
        $getTokens = User::get(['access_token']);

        foreach ($getTokens as $getToken) {
            $userTokens[] = $getToken->access_token;
        }
        if (in_array($apiToken, $userTokens)) {
            return true;
        }else{
            return false;
        }
    }
}
