<?php

namespace App\Http\Controllers;

class WelcomeController
{

    public function index()
    {
        $data['items'] = [
            [ 'firstname' => 'Uman', 'lastname' => 'Rai' ],
            [ 'firstname' => 'Kaushila', 'lastname' => 'Rai1' ],
            [ 'firstname' => 'Tejendra', 'lastname' => 'Rai2' ],
        ];

        $data['arag'] = ['new', 'old', 'me'];

        return view('welcome')->with('data', $data);
    }

}
