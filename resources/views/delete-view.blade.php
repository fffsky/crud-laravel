@extends('layouts.app')
@section('content')

    <div class="view-text">
    <h1>会員一覧情報<h1>
        @foreach($user as $value)
            <p>ID：{{$value->id}}</p>    
            <p>氏名：{{$value->name}}</p>
            <p >メールアドレス：{{$value->email}}</p>
            <p class="view-delete">削除日：{{$value->deleted_at}}</p>
        @endforeach
        <a href={{route('registerView')}}>会員一覧に戻る</p>
    </div>
   
@endsection