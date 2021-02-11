<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function album(Request $request,User $user){
        $data = $user;
        $data['album'] =  $user->photos;
 	    return response()->json($data,200);
    }
}
