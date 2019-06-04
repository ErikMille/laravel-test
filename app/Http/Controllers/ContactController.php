<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact()
    {
        // prepare the data
        // ...

        // pass the data to the views
        $view = view('contact/form', [
            'name' => 'Laravel',
            'username' => 'Jan',
            'day' => 'Tuesday'
        ]);

        // return the views as the response
        return $view;
    }
}
