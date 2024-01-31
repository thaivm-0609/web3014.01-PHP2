<?php
namespace App\Controllers;

use eftec\bladeone\BladeOne;

class BaseController {
    protected function render($view,$data=[]) {
        $viewDir = './app/views';
        $cache = './cache';
        $blade = new BladeOne($viewDir,$cache,BladeOne::MODE_DEBUG);
        echo $blade->run($view,$data); 
    }
}
?>
