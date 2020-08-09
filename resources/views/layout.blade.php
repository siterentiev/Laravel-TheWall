<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="/">Стена</a>
            @if(!$isLogged)
            <a class="nav-link" href="/register">Зарегистрироваться</a>
            <a class="nav-link" href="/login">Войти</a>
            @endif
            @if($isLogged)
            <span class="nav-link ml-auto">{{'@'}}{{$name}}</span>
            <a class="nav-link" href="/out">Выйти</a>
            @endif
        </nav>
    </div>
</div>

@yield('content')

@if(!isset($isJustRegistered) || !$isJustRegistered)
<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Статистика</h4>
        <p>Всего постов: {{$countPosts}}.</p>
        <p>Дата первого: {{\Carbon\Carbon::parse($firstPost->date)->format('d.m.Y')}}.</p>
        <p>Дата последнего: {{\Carbon\Carbon::parse($lastPost->date)->format('d.m.Y')}}.</p>
        <p>Автор первого: {{$firstPost->user->name}}</p>
        <p>Автор последнего: {{$lastPost->user->name}}</p>
    </div>
</div>
@endif

</div>

<footer class="blog-footer">
    <p>
        <a href="#">Наверх</a>
    </p>
</footer>
</div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>

</html>





