<?php 

namespace Src\Core;

class Controller
{
    public function index()
    {
        require __DIR__ . '/../Views/index.php';
    }
}