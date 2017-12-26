@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="item-cards-row">
            <div class="catalog-items">
                    <div class="col-md-3 col-xs-5">
                        <a href="{{route('categoriesPage',['categories'=>$category->path,'page'=>1])}}">
                            <img src="{{$category->cat_img}}" class="img-responsive picto-img" alt="">
                            <h3>{{$category->cat_name}} </h3>
                        </a>
                    </div>

            </div>
        </div>
    </div>

@endsection