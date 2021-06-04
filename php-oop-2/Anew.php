<?php

abstract class Anew implements Inew
{

    public function __construct()
    {}

    public function valid($arg)
    {
        $this->arg = $arg;
    }
}

