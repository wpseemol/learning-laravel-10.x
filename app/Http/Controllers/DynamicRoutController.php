<?php

namespace App\Http\Controllers;

class DynamicRoutController extends Controller {
    function DynamicRoute( string $id1, string $id2 ): string {
        return "laravel dynamic Route first :{$id1} send: {$id2}";
    }
}
