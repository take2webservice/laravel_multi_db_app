<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use App\FirstSubmit;
use App\SecondSubmit;

class SubmitController extends Controller
{
    public function post(Request $request){
        $val = $request->input('value', null);
        self::submit($request->input('value', null), new Submit());
        self::submit($request->input('docker1', null), new FirstSubmit());
        self::submit($request->input('docker2', null), new SecondSubmit());
        return "value was saved!";
    }
    
    private function submit($value, $submit){
        if ($value == null) return;
        $submit->value = $value;
        $submit->save();
    }
    
    public function list(Request $request){
        $submits = Submit::all();
        return json_decode($submits);
    }
    
    public function list_docker1(Request $request){
        $submits = FirstSubmit::all();
        return json_decode($submits);
    }
    
    public function list_docker2(Request $request){
        $submits = SecondSubmit::all();
        return json_decode($submits);
    }
}
