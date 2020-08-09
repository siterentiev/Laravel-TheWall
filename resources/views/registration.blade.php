@extends('layout')

@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Регистрация</h1>
            <p class="lead blog-description">Присоединяйтесь к большому сообществу</p>
        </div>
    </div>

    <div class="container">

        <div class="row mb-5">

            <div class="col-sm-8 blog-main">

                <form action="/new" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}">
                        {{$errors->first('email')}}
                    </div>
                    <div class="form-group">
                        <label for="name">Имя пользователя</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" placeholder="Имя пользователя">
                        {{$errors->first('name')}}
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Пароль">
                        {{$errors->first('password')}}
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Повторите пароль</label>
                        <input type="password" class="form-control" name="password_confirm" placeholder="Повторите пароль">
                        {{$errors->first('password_confirm')}}
                    </div>

                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>

            </div>

@endsection





