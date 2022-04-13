@extends('layouts.app')
@section('content')

    <div id="personal-information">
        <div class="personal-text">
            <h1>会員登録情報<h1>
            <p>氏名：{{$user->name}}</p>
            <p>メールアドレス：{{$user->email}}</p>
        </div>  
        <div class="personal-link">
            <a href="/edit/{{$user->id}}">編集はこちらから</a>
        </div>
    </div>
@endsection