<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class LoremController extends Controller {

    /**
     * Responds to requests to GET /lorem
     */
    public function getLorem() {
        return view('lorem/main');
    }

}
