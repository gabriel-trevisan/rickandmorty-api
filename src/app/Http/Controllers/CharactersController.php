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

    public function show($id)
    {
        $character = explode(',', $id);
        // dd($character);

        if(is_null($character)){
            return response()->json('', 204);
        }

        $character = Character::find($character);

        return response()->json($character, 200);
    }
}
