<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserCOntroller extends Controller
{
    //

    public function getAllUsers(){

        $users = DB::select('SELECT name, domicilio FROM users, user_domicilio WHERE users.id = user_domicilio.user_id');
        return response()->json($users, 200);
        
    }
}
