<?php

namespace Src\Core;
use Src\Core\Connect;

class Model{
    public function Connect()
    {
        return Connect::getInstance();
    }
}