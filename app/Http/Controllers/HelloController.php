<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // public function index() {
    //     $data = [
    //         ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
    //         ['name'=>'山田太郎', 'mail'=>'taro@yamada']
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }

    public function index() {
        return view('hello.index', ['message'=>'Hello']);
    }

    public function post(Request $request) {
        $data = ['one', 'two', 'three', 'four', 'five', 'six'];
        return view('hello.index', ['msg'=>$request->msg], ['data'=>$data]);
    }
}