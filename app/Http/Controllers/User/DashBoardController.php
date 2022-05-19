<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class DashBoardController extends Controller
{
    public function index()
    {

        $douongcart = \Cart::content();
        $viewData = [

            'douongcart' => $douongcart,

        ];
        return view('user.dashboard', $viewData);
    }
}