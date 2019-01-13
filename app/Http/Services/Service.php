<?php
/**
 * Created by PhpStorm.
 * User: 20nu
 * Date: 12/14/2018
 * Time: 2:35 PM
 */

namespace App\Http\Services;



use Illuminate\Container\Container;

abstract class Service
{
    protected $interface;

    public function __construct(Container $app)
    {
        $this->interface = $app->make($this->interface());
    }

    abstract public function interface();

    public function create(array $attributes){
        return $this->interface->create($attributes);
    }
}