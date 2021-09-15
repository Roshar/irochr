<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use App\Helpers\RFa;

class MainController extends Controller
{
    public function index()
    {
        //Все новости
       $posts = Post::with('category')->where('category_id', '1')->orWhere('category_id', '4')->orderBy('created_at', 'desc')->paginate(3);

       //Главная новость
       $mainArticle = Post::with('category')->where('category_id', '6')->orderBy('id', 'desc')->paginate(1);

       //Анонсы
       $announces = Post::with('category')->where('category_id','5')->orderBy('id', 'desc')->paginate(3);

       //Актуальное видео
       $mainMovie = Post::where('category_id', '7')->latest()->get();

       //Актуальные документы
        $documents = Post::with('category')->where('category_id', '14')->orderBy('id', 'desc')->paginate(6);

       //Все видео - основной раздел
        $videoList = $this->videoList();
//        var_dump($videoList);
//        exit;

        //Видеотека
        //$videoList1 = Post::where('category_id','11')->latest()->paginate(6);


        $reviews = Post::with('category')->where('category_id', '16')->orderBy('id', 'desc')->paginate(6);

        return view('index', compact('posts','mainArticle','announces','mainMovie','documents','videoList','reviews'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        $category = Category::where('slug', 'novosti')->firstOrFail();
        $last_news = $category->post()->orderBy('id', 'desc')->paginate(3);
        return view('show',compact('post','last_news'));
    }

    public function mainArticle()
    {
        $mainArticle = Post::with('category')->where('category_id=6')->latest();
//        var_dump($mainArticle);
//        exit;
//        return view('index', compact('posts'));
    }

//TODO замена
    public function videoList()
    {
        $part = 'snippet';
        $country = 'RU';
        $apiKey = config('services.youtube.api_key');
        $maxResults = 6;
        $youtubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video'; //playlist,channel
        $url = "$youtubeEndPoint?part=$part&channelId=UC4JstR8NrXG0WcdtTWjRjrg&maxResults=$maxResults&regionCode=$country&type=$type&key=$apiKey";

        $response = Http::get($url);
        $results = json_decode($response);
        File::put(storage_path(). '/app/public/results.json',$response->body());
        return $results;

    }

    public function watch($id)
    {
        $singleVideo = $this->_singleVideo($id);
    }

    protected function _singleVideo($id)
    {
        $apiKey = config('services.youtube.api_key');
        $part = 'snippet';
        $url = "https://www.googleapis.com/youtube/v3/video?part=$part&id=$id&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);
        File::put(storage_path(). '/app/public/single.json',$response->body());
        return $results;
    }

    public function youtubeListMain()
    {

    }

}






//////
///

