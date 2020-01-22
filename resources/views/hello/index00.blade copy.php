<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body>
        <h1>blade</h1>
        @isset($msg)
        <p>こんにちは、{{$msg}}さん</p>
        @else
        <p>なにか書いてください。</p>
        @endisset
        <form method="POST" action="/hello">
            @csrf
            <input type="text" name="msg">
            <input type="submit">
        </form>
        
        <ol>
            @foreach($data as $item)
            @if($loop->first)
            <p>はじめ</p>
            @endif
            <li>{{$item}}</li>
            @if($loop->last)
            <p>終わり</p>
            @endif
            @endforeach
        </ol>


    </body>
</html>


