<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Http\Requests\newsRequest;

class AdminNewsController extends Controller
{
    public function listShow(){
        $news=News::paginate(5);

        return view('Admin/News/newsList',['news'=>$news]);
    }

    public function show($news_id){

        $news=News::find($news_id);

        return view('Admin/News/newsShow',['news'=>$news]);
    }

    public function create(){

        return view('Admin/News/newsCreate');

    }

    public function store(newsRequest $request){

        $news=new News ;
        $news->fill($request->all());
        $request->visible=='on'?$news->visible=1:$news->visible=0;
        $news->save();

        return redirect()->route('adminPage');
    }

    public function edit($news_id){

        $news=News::find($news_id);

        return view('Admin/News/newsEdit',['news'=>$news]);
    }

    public function update(newsRequest $request,$news_id){

        $news=News::find($news_id);
        $news->update($request->all());
        $request->visible=='on'?$news->visible=1:$news->visible=0;
        $news->save();

        return redirect()->route('news.list');
    }

    public function delete($news_id){

        $news=News::find($news_id);
        $news->delete();

        return redirect()->route('news.list');
    }
}
