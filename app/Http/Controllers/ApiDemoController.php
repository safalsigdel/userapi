<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ApiDemoController extends Controller
{
    public function demo()
    {
        $client = new Client();
        $respone =$client->post(
            'http://127.0.0.1:8000/api/user-register',
            array(
                'exceptions' => false,
                'form_params' => array(
                    'name' => 'Safal Sigdel',
                    'email' => 'sigdel@gmail.com',
                    'password' => 'secret',
                    'gender'=>'male',
                    'country'=>'Nepal',
                    'state'=>'state 2',
                    'phone_number'=>'9811427933',
                    'address'=>'Maitidevi,Kathmandu'

                )
            )
        );
        print_r($respone->getBody());
    }
}
