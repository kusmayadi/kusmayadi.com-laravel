<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $page = null)
    {
        try {
            if ($page === null)
                $page = 'home';

            return view('page.' . $page);
        } catch (InvalidArgumentException $e) {
            abort(404);
        }
    }
}
