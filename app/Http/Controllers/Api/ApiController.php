<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Teepluss\Restable\Restable;

class ApiController extends Controller
{
    /**
     * Checking permission.
     *
     * @return Response
     */
    public function __construct(Restable $rest, Request $request)
    {
        $this->rest = $rest;

        $this->lang = $request->header('lang', 0);

        if ( ! $request->get('secret') == '12345')
        {
            return $this->rest->unauthorized()->render();
        }
    }
}
