@extends('layouts.helloapp')

@section('title', 'Index')

@section('menuber')
    @parent
    インデックスページ
@endsection

@section('content')

    {{-- @component('components.message')

    @slot('msg_title')
        CAUTION!
    @endslot


    @slot('msg_content')
        これはメッセージの表示です。
    @endslot

    @endcomponent --}}

    {{-- <p>ここが本文のコンテンツです</p>
    <p>必要なだけ記述できます</p>

    @include('components.message', ['msg_title'=>'ok','msg_content'=>'サブビューです。']) --}}

    {{-- @section('content')
        <p>ここが本文のコンテンツです</p>
        <ul>
            @each('components.item', $data, 'item')
        </ul>
    @endsection --}}

    @section('content')
        <p>ここが本文のコンテンツです</p>
        <p>Controller value<br>'message' = {{$message}}</p>
        <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
    @endsection

@endsection

@section('footer')
    copyright 2020 kotani
@endsection
