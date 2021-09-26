@extends('layouts.main')

@section('title', '新規登録画面')


@section('content')
    <h1>新規登録画面</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="email">メールアドレス</label>
            <input type="text" name="email" id="email" required>
        </div>
        <div>
            <label for="zipcode">郵便番号</label>
            <input type="text" name="zipcode" id="zipcode" required>
        </div>
        <div>
            <label for="address">住所</label>
            <textarea name="address" id="address" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="phone">電話番号</label>
            <input type="text" name="phone" id="phone" required>
        </div>
        <input type="submit" value="登録">
    </form>
    <button>郵便番号検索に戻る</button>
@endsection
