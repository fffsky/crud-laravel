@extends('layouts.app')
@section('content')

    <div class="register-view-text">
    <h1>会員一覧<h1>
        @foreach($user as $value)
            <p>ID：{{$value->id}}</p>    
            <p>氏名：{{$value->name}}</p>
            <p class="view-email">メールアドレス：{{$value->email}}</p>
        @endforeach
    <a href={{route('deleteView')}}>削除会員一覧を表示</p>
    </div>
@endsection