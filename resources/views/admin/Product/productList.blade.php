@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h3>Всего {{$products->total()}} товар(ов) </h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>prod_id</td>
                        <td>cat_id/cat_name</td>
                        <td>brand_id/name</td>
                        <td>specification_id</td>
                        <td>name</td>
                        <td>avaible</td>
                        <td>img</td>
                        <td>price</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->prod_id}}</td>
                            <td> <a class="btn btn-secondary" href="{{route('category.show',['id'=>$product->cat_id])}}"
                                    role="button">{{$product->cat_id}}. {{$product->category->cat_name}}</a></td>
                            <td> <a class="btn btn-secondary" href="{{--{{route('brand.show',['id'=>$product->brand_id])}}--}}"
                                    role="button">{{$product->brand_id}}. {{$product->brand->brand_name}}</a></td>
                            <td> <a class="btn btn-secondary" href="{{--{{route('news.show',['id'=>$product->specification_id])}}--}}"
                                    role="button">{{$product->specification_id}}</a></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->avaible}}</td>
                            <td>{{$product->img}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('product.show',['id'=>$product->prod_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('product.edit',['id'=>$product->prod_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('product.delete',['id'=>$product->prod_id])}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$products->links()}}
            </div>
        </div>
    </div>

@endsection