<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\StoreRequest;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{

    public function mainPage()
    {
        $postsStat = Post::getStatistic();

        return view('welcome', [
            'name' => User::getName(),
            'isLogged' => User::getLogStatus(),
            'firstPost' => $postsStat['first'],
            'lastPost' => $postsStat['last'],
            'countPosts' => $postsStat['count'],
            'posts' => Post::getAll()
        ]);
    }

    public function registerPage()
    {
        $postsStat = Post::getStatistic();

        return view('registration', [
            'name' => User::getName(),
            'isLogged' => User::getLogStatus(),
            'firstPost' => $postsStat['first'],
            'lastPost' => $postsStat['last'],
            'countPosts' => $postsStat['count']
        ]);
    }

    public function loginPage()
    {
        $postsStat = Post::getStatistic();

        return view('login', [
            'name' => User::getName(),
            'isLogged' => User::getLogStatus(),
            'firstPost' => $postsStat['first'],
            'lastPost' => $postsStat['last'],
            'countPosts' => $postsStat['count']
        ]);
    }

    public function successRegistrationPage()
    {
        return view('registration_success', [
            'name' => User::getName(),
            'isLogged' => User::getLogStatus(),
            'isJustRegistered' => true
        ]);
    }


    public function storePost(StoreRequest $request)
    {
        $request->validated();
        Post::store(
            $request->all()
        );

        return redirect('/');
    }

    public function registration(RegisterRequest $request)
    {
        $request->validated();
        User::register(
            $request->all()
        );

        return redirect('/success');
    }

    public function login(LoginRequest $request)
    {
        $request->validated();
        $remember = $request->input('remember');

        if (Auth::attempt($request->only(['email', 'password']), $remember)) {
            return redirect('/');
        } else {
            return redirect('/login')
                ->withErrors('Вход в систему с указанными данными невозможен');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
