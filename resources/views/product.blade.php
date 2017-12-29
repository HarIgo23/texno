@extends('layouts.navcatalog')

@section('contentCatalog')
    <!--style3 переебивает style2 если всё в navcat подключать-->
    <link rel="stylesheet" href="{{asset('css/style3.css')}}">
    <link rel="stylesheet" href="{{asset('css/zoom-slider-item.css')}}">


    <div class="row item-information">
        <div class="col-md-5 col-sm-12">


            <div class="zoom-slider">
                <div class="zoom-slider-img">
                    <div class="img item-photo">
                        <a rel="example_group" id="adpdp14">
                            <img src="{{$product->specification->spec_img1}}" class="img-responsive" id="dp14"
                                 style="margin-bottom: 3px;" alt=""/>
                        </a>
                    </div>
                    <div class="thumbs">
                        <div class="it"><a style="display:none;" rel="example_group"></a>
                            <img src="{{$product->specification->spec_img1}}" class="img-responsive"
                                 onclick='setBigImage(this);' alt=""/>
                        </div>
                        @if(isset($product->specification->spec_img2))
                            <div class="it"><a style="display:none;" rel="example_group"></a>
                                <img src="{{$product->specification->spec_img2}}" class="img-responsive"
                                     onclick='setBigImage(this);' alt=""/>
                            </div>
                        @endif
                        @if(isset($product->specification->spec_img3))
                            <div class="it"><a style="display:none;" rel="example_group"></a>
                                <img src="{{$product->specification->spec_img3}}" class="img-responsive"
                                     onclick='setBigImage(this);' alt=""/>
                            </div>
                        @endif
                        @if(isset($product->specification->spec_img4))
                            <div class="it"><a style="display:none;" rel="example_group"></a>
                                <img src="{{$product->specification->spec_img4}}" class="img-responsive"
                                     onclick='setBigImage(this);' alt=""/>
                            </div>
                        @endif
                        @if(isset($product->specification->spec_img5))
                            <div class="it"><a style="display:none;" rel="example_group"></a>
                                <img src="{{$product->specification->spec_img5}}" class="img-responsive"
                                     onclick='setBigImage(this);' alt=""/>
                            </div>
                        @endif
                        @if(isset($product->specification->spec_img6))
                            <div class="it"><a style="display:none;" rel="example_group"></a>
                                <img src="{{$product->specification->spec_img6}}" class="img-responsive hidden-md"
                                     onclick='setBigImage(this);' alt=""/>
                            </div>
                        @endif
                        <div class="clr"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-7 col-sm-12">
            <div class="item-description">
                {!! $product->specification->description !!}
            </div>
            <h4 class="order">Цена: {{$product->price}} руб.</h4>
            <span class="order">В наличии</span>
        </div><!-- / charasteristics -->

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="all-characteristics col-md-9 col-xs-7 ">
                    <form method="post" action="{{route('buy',['prod_id'=>$product->prod_id])}}">
                    <input type="submit" value="купить" class="btn btn-primary">
                    {{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div
    </div>
    </section>
@endsection