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

    /**
    * Responds to requests to GET /about
    */
    public function about() {
        return view('main.about');
    }

}
