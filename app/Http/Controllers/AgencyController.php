<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function __construct() {
        //
    }

    public function index() {
        return view('pages.agency');
    }
}