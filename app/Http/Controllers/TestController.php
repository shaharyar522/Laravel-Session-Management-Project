<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $value = session()->all();
        echo "<pre>";
        print_r($value);
        echo "</pre>";

        //  $value =  session()->get('name');
        //  echo $value;
    }

    public function storagesession()
    {
        session([
            'name' => 'Shari',
            'class' => 'BSCS'
        ]);
        return redirect('/');
    }

    public function deletesession() {
        session()->forget(['name','class']);
              return redirect('/');
    }
}
