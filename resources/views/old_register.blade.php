@extends('layouts.app')
@section('content')

<main  id="bg-img" class="antialiased">

    <div class="register-form">
        <h1>新規登録</h1>
        <form action="/memberRegister" method="post"> 
            @csrf 
            <input class="register-input" type="text" name="name"   placeholder="名前"><br>
            <input class="register-input" type="tel" name="tel" placeholder="電話番号(ハイフンなしで記載してください)"><br>
            <input class="register-input" type="email" name="email" placeholder="メールアドレス"><br>
            <button class="btn btn-primary" id="register_btn" type="submit">登録</button>
        </form>
    </div>
  
</main>
@endsection