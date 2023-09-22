<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iankumu\Mpesa\Facades\Mpesa;//import the Facade


class MpesaC2BController extends Controller
{
    public function registerURLS(Request $request)
    {
        $shortcode = $request->input('shortcode');
        $response = Mpesa::c2bregisterURLS($shortcode);
        $result = json_decode((string)$response, true);

        return $result;
    }
}
