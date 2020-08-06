<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
    	return ['NIS'=>'3103118106','Nama'=>'Rafif','Gender'=>'Laki-Laki','Phone'=>'085399476020','Kelas' => 'XIIRPL 3'];
    }
}
