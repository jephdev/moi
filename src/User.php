<?php

namespace Jephdev\Moi;

class User
{
    // protected $base_url;

    // public function __construct($api_base_url)
    // {
    //     $this->base_url = $api_base_url;
    // }

    public function one()
    {
        return "Me";
    }

    public function many()
    {
        return [
            "me", "you"
        ];
    }
}
