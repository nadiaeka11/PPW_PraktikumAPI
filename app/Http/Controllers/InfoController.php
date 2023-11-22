<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Hello world', 'success' => true], 200);
    }
}
