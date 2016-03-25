<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

    /**
     * Responds to requests to GET /lorem
     */
    public function getLorem() {
        return view('lorem.main');
    }

    /**
     * Responds to requests to POST /lorem/show
     */
    public function postShow(Request $request) {
        $this->validate($request,[
            'paras' => 'required|numeric|min:1|max:50']);
        return view('lorem.loremshow')
            ->with('paras', $request->input('paras'));
    }

}
