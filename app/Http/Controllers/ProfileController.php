<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // TODO: make an index method that shows a list of resources (in this case profiles)


    // Show a single resource (in this case a profile)
    public function show()
    {
        // Data we need: name, email, description
        $data = [
            "name" => "Sietse Dijks",
            "email" => "s.dijks@rocwb.nl",
            "age" => 8,
            "description" => "Er was eens een ......................",
            "interests" => [
                "Gamen",
                "Coden",
                "IJs maken",
                "Nee"
            ]
        ];

        return view('me', $data);
    }
}
