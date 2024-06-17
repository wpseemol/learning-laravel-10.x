<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DynamicRoutController extends Controller {
    function DynamicRoute( Request $request ): string {

        $id1 = $request->id1;
        $id2 = $request->id2;

        return "laravel dynamic Route first :{$id1} send:{$id2}";
    }
}
