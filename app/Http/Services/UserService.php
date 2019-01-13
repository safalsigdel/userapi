<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 28/12/2018
 * Time: 12:40
 */

namespace App\Http\Services;


use App\Http\Interfaces\UserRepositoryInterface;

class UserService extends Service
{
    public function interface()
    {
        return UserRepositoryInterface::class;
    }

    public function index()
    {
        return $this->interface->index();
    }


    public function register($data)
    {
        return $this->interface->register($data);
    }

}