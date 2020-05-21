<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Character;

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

    public function index(){
        return response()->json(Character::all());
    }


}
