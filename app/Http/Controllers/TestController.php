<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {

        $value = session('name');

        return view('welcome',compact('value'));
        // $value = session()->all();
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";

        // $value =  session()->get('name');
        // echo $value;

        //has method

        // if (session()->has('name')) {
        //     $value = session()->get('name');
        //     echo $value;
        // } else {
        //     echo "name key does not exit";
        // }

    }

    public function storagesession()
    {
        session([
            'name' => 'Shari',
            'class' => 'BSCS'
        ]);

        //used count method
        // session()->increment('count');

        //used token for safe hacker
        // session()->regenerate();

        session()->flash('status','session saved successsfully');

        return redirect('/');
    }

    public function deletesession()
    {
        // session()->forget(['name','class']);
        session()->flush();

        return redirect('/');
    }
}
