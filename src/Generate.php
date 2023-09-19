<?php

namespace RandomNumber;

class Generate
{
    public function __construct()
    {
    }

    public function int()
    {
        return rand(0, 100);
    }
}
