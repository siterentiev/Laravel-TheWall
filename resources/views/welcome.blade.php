@extends('layout')

@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Стена</h1>
            <p class="lead blog-description">Место, где каждый может высказаться</p>
        </div>
    </div>

    <div class="container">

        <div class="row mb-5">

            <div class="col-sm-8 blog-main">

                @if($isLogged)
                <form action="/store" method="post" class="mb-5">
                    {{csrf_field()}}
                    <h3>Написать на стене</h3>
                    <div class="form-group">
                        <label for="title">Заголовок сообщения</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                        {{$errors->first('title')}}
                    </div>
                    <div class="form-group">
                        <label for="text">Текст сообщения</label>
                        <textarea id="text" class="form-control" name="content" rows="5"></textarea>
                        {{$errors->first('content')}}
                    </div>

                    <button type="submit" class="btn btn-primary">Написать</button>
                </form>
                @endif

                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{$post->title}}</h2>
                        <p class="blog-post-meta">Опубликован {{\Carbon\Carbon::parse($post->date)->format('d.m.Y')}}.
                            Автор: {{$post->user->name}}</p>

                        <p>{{$post->content}}</p>
                    </div>
                @endforeach

                {{--            <div class="blog-post">--}}
                {{--                <h2 class="blog-post-title">Заголовок рыбного поста</h2>--}}
                {{--                <p class="blog-post-meta">Опубликован 26.09.2017. Автор: Иван</p>--}}

                {{--                <p>Очень важное по мнению автора сообщение</p>--}}
                {{--            </div>--}}

            </div>

@endsection

