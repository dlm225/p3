<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class MainController extends Controller {

    /**
    * Responds to requests to GET /
    */
    public function index() {
        return view('main.index');
    }
}
