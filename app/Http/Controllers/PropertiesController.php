<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Residential;
use App\Media;

class PropertiesController extends Controller {

    public function residentials(Residential $residential) {

        $data = $residential::all();

        return response()->json( $data );
    }
}
