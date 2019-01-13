<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 28/12/2018
 * Time: 12:43
 */

namespace App\Http\Interfaces;


interface UserRepositoryInterface extends RepositoryInterface
{
    public function index();

    public function register($data);

    public function login($data);

}