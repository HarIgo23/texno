

@extends('layouts.navcatalog')

@section('contentCatalog')


</div>
</div>

<div class="container">
    <!--Для телефонов-->
    <div class="row">
        <div class="main_products_hide">
            <span class="trigger-nav">Производители &#9660;</span>
            <ul class="trigger-ul">
                <!--По ссылке будет передаваться запрос как при cheboxe-->
                @foreach($brands as $brand)
                    <li><a href="#"> {{$brand->brand_name}}</a></li>
                @endforeach

            </ul>
        </div>
    </div>
</div>
<div class="container main_products">
    <div class="row">
        <div class="col-sm-2 filters">
            <h3>Производитель</h3>
            <form method="post" action="{{route('sort',['categories'=>$category->path])}}">
                <ul>
                    @foreach($brands as $brand)
                        <li>
                            <label class="control control-checkbox">
                                {{$brand->brand_name}}
                                <input type="checkbox" name="{{$brand->brand_id}}"
                                       @foreach($selectedBrands as $selectedBrand=>$value)
                                       @if($selectedBrand == $brand->brand_id) checked @endif
                                        @endforeach >
                                <div class="control_indicator"></div>
                            </label>
                        </li>
                    @endforeach
                </ul>

                <div class="sort">
                    <h4>Сортировать по цене:</h4>
                    <label class="radio radio-btn">
                        <input name="price" type="radio" value="desc"  @if($sort=='desc') checked @endif>По возрастанию
                        <div class="radio-btn-indicator"></div>
                    </label>
                    <label class="radio radio-btn">
                        <input name="price" type="radio" value="asc" @if($sort=='asc') checked @endif>По убыванию
                        <div class="radio-btn-indicator"></div>
                    </label>
                </div>
                <input type="submit" value="сортировать" class="btn btn-primary">
                {{csrf_field()}}
            </form>
        </div>
        <!-- / колонка с фильтрами -->

        <div class="col-sm-offset-1 col-sm-9">
            <div class="item-cards-row">
                @foreach($products as $product)
                    <div class="col-md-4 col-sm-6 col-xs-12 ">
                        <div class="card">
                            <a href="{{route('productPage',['categories'=>$category->path,'product'=>$product['name']])}}">
                                <img class="card-img-top img-responsive img-responsive-cards" src="{{$product['img']}}"
                                     alt="Card image cap">
                            </a>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="{{route('productPage',['categories'=>$category->path,'product'=>$product['name']])}}">
                                        {{$product['name']}}
                                    </a>
                                </h4>
                                <p class="card-text">{{$product['price']}} руб.</p>
                                <a href="#" class="btn btn-primary">Купить</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>

    </div>
</div>


</section>    <!-- /cestion.prev -->
@endsection
