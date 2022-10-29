@extends("layouts.app")

@section("title-blog")
    Страница контактов
@endsection

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>

@endif
<?php
echo "";
?>

@section("content")
    <form action={{ route("contact-form") }} method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите Имя</label>
            <input name="name" value="" type="text" placeholder="Ваше имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Почта</label>
            <input name="email" value="" type="email" placeholder="Ваше ваш e-mail" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема письма</label>
            <input name="subject" value="" type="text" placeholder="Тема сообщения" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Текст письма</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите текст сообщения"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Отправить</button>
    </form>
@endsection