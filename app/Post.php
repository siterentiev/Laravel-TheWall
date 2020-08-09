<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Post
 * @package App
 *
 * @property int $user_id
 * @property DateTime $date
 * @property string $title
 * @property string $content
 */
class Post extends Model
{
    public $fillable = ['title', 'content', '_token'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function getStatistic()
    {
        $posts = Post::all();
        $first = $posts->first();
        $last = $posts->last();
        $count = $posts->count();

        return [
            'first' => $first,
            'last' => $last,
            'count' => $count
        ];
    }

    public static function getAll()
    {
        return Post::all()->sortDesc();
    }

    public static function store($data)
    {
        $post = new Post($data);
        $post->user_id = Auth::id();
        $post->date = date('Y-m-d H:i:s');
        $post->save();
    }
}
