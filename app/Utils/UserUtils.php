<?php

namespace App\Utils;

use App\RegisterCode;

class UserUtils {
    public static function isValidRegisterCode($reg_code) {
        if(RegisterCode::where(['code' => $reg_code, 'status' => false])->exists()) {
            $rc = RegisterCode::where(['code' => $reg_code, 'status' => false])->first();
            $rc->status = true;
            $rc->save();

            return true;
        }

        return false;
    }
}
