<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class TextGenController extends Controller {

    /**
    * Responds to requests to GET /text
    */
    public function getText() {
        return 'List all the text generators';
    }

    /**
     * Responds to requests to GET /text/lorem
     */
    public function getLorem() {
        return 'Show Lorem Ipsum Generator';
    }

    /**
     * Responds to requests to GET /text/sports
     */
    public function getSports() {
        return 'Show Sports Lorem Generator';
    }
}
