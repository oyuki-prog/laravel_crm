@extends('layouts.main')

@section('title', '郵便番号検索画面')


@section('content')
    <h1>郵便番号検索画面</h1>
    <div>
        <form action="{{ route('customers.create') }}" method="GET">
            <label for="zipcode">郵便番号検索</label>
            <input type="text" name="zipcode" id="zipcode" placeholder="検索したい郵便番号">
            <input type="submit" value="検索">
        </form>
    </div>
    <button onclick="location.href='{{ route('customers.index') }}'">一覧に戻る</button>
@endsection
