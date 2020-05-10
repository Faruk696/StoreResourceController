<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class storeController extends Controller
{
    public function index(){
        echo "Hi this is from INDEX method and this is a get REQUEST";
    }

    public function create(){
        echo "Hi this is from CREATE method and this is a get REQUEST";
    }

    public function show(){
        echo "Hi this is from SHOW method and this is a get REQUEST";
    }

    public function edit(){
        echo "Hi this is from EDIT method and this is a get REQUEST";
    }
    public function store(Request $request){
        echo "THIS is store ".$request->text;
    }
    public function destroy($id){
        echo "THIS is distroy ".$id;
    }
}
