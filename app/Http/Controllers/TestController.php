<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class TestController extends Controller {

    public function index(Request $request) {
        // $user = new \App\User;
        // $user->email = 'root';
        // $user->password = bcrypt('magena2general');
        // $user->save();
        
        
        // set password
        //$user = $request->user()->toArray();
        //$conf = Conf::where('key', '=', "type")->first();
        
        $u = User::find(1);
        $u->password = bcrypt('magena2525');
        $u->save();
        
        return redirect()->action('AdminController@index');
         
        
    }

}
