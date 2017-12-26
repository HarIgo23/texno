@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Количество производителей: {{$brands->total()}}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>brand_id</td>
                        <td>cat_id</td>
                        <td>brand_name</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->brand_id}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('category.show',['id'=>$brand->cat_id])}}"
                                    role="button">{{$brand->cat_id}}. {{$brand->category->cat_name}}</a>
                            </td>
                            <td>{{$brand->brand_name}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('brand.show',['id'=>$brand->brand_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('brand.edit',['id'=>$brand->brand_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('brand.delete',['id'=>$brand->brand_id])}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$brands->links()}}
            </div>
        </div>
    </div>

@endsection