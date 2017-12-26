<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

use App\Models\Review;

class MainController extends Controller
{
    //как вариант сделать полноценный класс с аргументами $news,$review
    //c конструктором ,гетрами
    public function index(News $news, Review $reviews){
        //возвращает последние три новости
        $news = $news 
                -> orderBy('news_id','desc')//обратный порядок
                ->take(5)//только пять
                ->where('visible',1)//только которые можно отображать
                ->get();
        
        $reviews =$reviews-> orderBy('review_id','desc')//обратный порядок
                ->take(6)//только шесть
                ->where('visible',1)//только которые можно отображать
                ->get();
        
        return view('main',['news'=>$news,'reviews'=>$reviews]);
        
    }
    
    
}
