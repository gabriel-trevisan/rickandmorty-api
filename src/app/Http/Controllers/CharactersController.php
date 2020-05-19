<?php

namespace App\Http\Controllers;

class CharactersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    
    }

    public function getAll(){
        return json_encode(
            array(
                "results" => array(
                    array(
                        "id" => 1,
                        "name" => "Rick Sanchez",
                        "status" => "Alive",
                        "species" => "Human",
                        "type" => "",
                        "gender" => "Male"
                    ),
                    array(
                        "id" => 2,
                        "name" => "Morty Smith",
                        "status" => "Alive",
                        "species" => "Human",
                        "type" => "",
                        "gender" => "Male"
                    )
                )
            )
        );
    }


}
