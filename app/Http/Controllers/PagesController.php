<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\MustVerifyEmail;
use Auth;
class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}
