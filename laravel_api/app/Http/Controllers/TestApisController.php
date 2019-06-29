<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestApisController extends Controller
{
    public function index(){
        return ['test' => 'testIndexData'];
    }

    public function store(Request $request){
        $requestTestValue = $request->input('test');
        $responseTestValue = 'response' . $requestTestValue;
        $responseData = ['test' => $responseTestValue];
        return $responseData;
    }
}
