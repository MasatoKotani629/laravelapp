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

    //middleware　前処理
    // public function index(Request $request) {
    //     return view('hello.index', ['data'=>$request->data]);
    // }

    //middleware　後処理
    public function index(Request $request) {
        return view('hello.index');
    }
}
