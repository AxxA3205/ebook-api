<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{   
    public function me() {
        return [
        'NIS' => 3103120130,
        'Namw' => 'Mahija Danadyaksa Sadtomo',
        'Phone' => '082325674582',
        'Class' => 'XII RPL 4'
        ];
    }
}
