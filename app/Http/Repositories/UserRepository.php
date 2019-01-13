<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 28/12/2018
 * Time: 12:30
 */

namespace App\Http\Repositories;


use App\Http\Interfaces\UserRepositoryInterface;
use App\User;

class UserRepository extends Repository implements UserRepositoryInterface
{
    public function model(){

        return User::class;

    }

    public function index()
    {
        return $this->model->all();

    }


    public function userJSONData($data)
    {
        return [
            'name'=>array_get($data,'name'),
            'email'=>array_get($data,'email'),
            'password'=>bcrypt(array_get($data,'password')),
            'phone_number'=>array_get($data,'phone_number'),
            'address'=>array_get($data,'address'),
            'gender'=>array_get($data,'gender'),
            'state' => array_get($data, 'state'),
            'country' => array_get($data, 'country')

        ];

    }

    public function register($data)
    {
        return $this->model->create($this->userJSONData($data));
    }

    public function login($data)
    {

    }
}