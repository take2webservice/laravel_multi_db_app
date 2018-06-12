<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;

class SubmitController extends Controller
{
    public function post(Request $request){
        $val = $request->input('value');
        $submit = new Submit();
        $submit->value = $val;
        $submit->save();
        return "value was saved!";
    }
    
    public function list(Request $request){
        $submits = Submit::all();
        return json_decode($submits);
    }
}
