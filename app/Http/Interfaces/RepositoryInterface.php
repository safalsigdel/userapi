<?php
/**
 * Created by PhpStorm.
 * User: 20nu
 * Date: 12/14/2018
 * Time: 2:37 PM
 */

namespace App\Http\Interfaces;


interface RepositoryInterface
{
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

}