@extends('todo/layout')
@section('content')
<div class="container ops-main">
    <form action="/news" method="post">
        @csrf
        @method('POST')
    <div>
        <label for="name">タイトル:</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="description">説明:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="status">状態:</label>
        <input id="status" name="status">
    </div>

    <div class="button">
        <button type="submit">登録</button>
    </div>
    </form>


</div>
@endsection