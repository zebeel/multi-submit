<?php

namespace App\Http\Controllers;

use App\RegisterCode;
use App\TestUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Utils\UserUtils;

class FormController extends Controller
{
    public function newUser(){
        $code = '';
        // Make sure that code does not duplicate
        while(true) {
            $code = Str::random(20);
            if(!RegisterCode::where('code', $code)->exists())
                break;
        }
        // Save register code to DB
        $reg_code = new RegisterCode();
        $reg_code->code = $code;
        $reg_code->status = false;
        $reg_code->save();

        return view('new-user', ['reg_code' => $reg_code->code]);
    }

    public function saveNewUser(Request $request) {
        if(UserUtils::isValidRegisterCode($request->reg_code)) {
            $user = new TestUsers();
            $user->name = $request->username;
            $user->save();
        }

        return view('show-message', ['message' => 'New user is added!']);
    }
}
