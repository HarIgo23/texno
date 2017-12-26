@extends('layouts.navcatalog')

@section('contentCatalog')
<!-- Хлебные крошки -->

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="catalog-items">
                
                @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{route('categoriesPage',['categories'=>$category->path/*,'page'=>1*/])}}">
                        <img src="{{$category->cat_img}}" class="img-responsive picto-img" alt="">
                        <h3>{{$category->cat_name}}</h3>
                    </a>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

</section>	<!-- /cestion.prev -->
@endsection