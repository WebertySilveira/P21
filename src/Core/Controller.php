<?php 

namespace Src\Core;
use Src\Core\Model;

class Controller
{
    public function index()
    {
        require __DIR__ . '/../Views/index.php';
    }

    public function read()
    {
        $fans = new Model();
        return $fans->Read();
    }
}