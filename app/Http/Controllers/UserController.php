<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * Responds to requests to GET /lorem
     */
    public function getUser() {
        return view('user.user');
    }

    /**
     * Responds to requests to POST /lorem/show
     */
    public function postUsers(Request $request) {
        $this->validate($request,[
            'users' => 'required|numeric|min:1|max:50']);
        return view('user.usershow')
            ->with('users', $request->input('users'));
    }

}
