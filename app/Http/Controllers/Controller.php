<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

   
    
        for($i=1; $i<=100; $i++) {
            $val = $this->comparar($i, 3, $i, 'Falabella');
            $val = $this->comparar($i, 5, $val, 'ESO');
            print $this->comparar($i, 3*5, $val, 'Integraciones')."</br>";
        }
    }

    function comparar($numero, $condicion, $valor, $string) {
        if($numero % $condicion == 0) {
            return $string;
        }
        return $valor;
    }
 





}























