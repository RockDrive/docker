<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function index()
    {
        $contetns = Content::get();
        return [
            "status" => true,
            "items" => $contetns
        ];
    }
}
