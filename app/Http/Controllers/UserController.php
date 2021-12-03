<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\User;

class UserController extends Controller
{

    // Criar Usuário novo para utilizar o sistema.
    public function createNewUser(Request $req){
        return $req['username'];
    }


}
