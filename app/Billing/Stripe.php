<?php

namespace App\Billing;

/**
 * Created by PhpStorm.
 * User: nggadas
 * Date: 21/06/17
 * Time: 17:02
 */
class Stripe
{
    protected $key;
    public function __construct($key)
    {
        $this->key = $key;
    }
}