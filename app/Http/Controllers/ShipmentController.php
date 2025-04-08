<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ShipmentController extends Controller
{
    public function orden() {
        return("hola desede return");
    }


    public function kakaroto(){
        return("hola desde return");
    }
}
