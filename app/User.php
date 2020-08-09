<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

/**
 * Class User
 * @package App
 *
 * @property string password
 */

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public static function register($data)
    {
        $user = new self;
        $user->fill($data);
        $user->setPassword($data['password']);
        $user->save();
    }

    private function setPassword($password)
    {
        $this->password = bcrypt($password);
    }

    public static function getLogStatus()
    {
        return Auth::check();
    }

    public static function getName()
    {
        return (Auth::check()) ? (Auth::user())->name : 'no any logged user';
    }
}
