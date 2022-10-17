<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'nis' => 3103120108,
            'nama' => 'hizkia kevin',
            'phone' => '1526137283',
            'kelas' => 'XII RPL 4'
            
        ];
    }
}
