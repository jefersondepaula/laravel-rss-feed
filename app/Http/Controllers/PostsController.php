<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{

    public function create( Request $request) {

        $rss = simplexml_load_file('http://feeds.bbci.co.uk/news/england/rss.xml');

        foreach ($rss->channel->item as $item) {
            $post_exist = Post::where('title', (string)$item->title)->first();

            if (!$post_exist){
                $new_post = new Post();
                $new_post->title = (string)$item->title;
                $new_post->content = (string)$item->description;
                $new_post->link = (string)$item->link;
                $new_post->pub_date = (string)$item->pubDate;
                $new_post->save();
            } else {
                return "not found a new post";
            }
        }
    }

    public function read( Request $request) {
        //return Post::all();
        $rss = simplexml_load_file('http://feeds.bbci.co.uk/news/england/rss.xml');
        $title = (string)$rss->channel->title;
        return view('index', [
            'title' => $title,
            'posts' => Post::all(),
        ]);
    }
}

