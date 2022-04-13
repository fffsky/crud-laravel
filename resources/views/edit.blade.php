@extends('layouts.app')
@section('content')

<div class="editForm">
    <h1>会員情報修正</h1>
        <form action="/userEdit" method="post">
        @csrf
                <input type="text" name="id" value="{{$user->id}}" hidden>
            <p>氏名<p>
                <input class="editInput" type="text" name="name" value="{{$user->name}}">
            <p>メールアドレス<p>
                <input class="editInput" type="text" name="email" value="{{$user->email}}"><br>
            <div class="edit-link">
                <button class="submitButton btn btn-primary" id="edit_btn" type="submit">編集</button>
                <a href={{route('top')}}>編集しないで戻る</a>
            </div>
            <a href="/userDelete/{{$user->id}}">
                <button class="submitButton btn btn-danger" id="delete_btn" type="button">削除</button>
            </a>
        </form>
</div>
<script src="{{ asset('/js/edit.js') }}"></script>
@endsection