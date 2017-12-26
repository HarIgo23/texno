@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Количество категорий: {{$categories->total()}}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>cat_id</td>
                        <td>cat_name</td>
                        <td>cat_img</td>
                        <td>cat_avaible</td>
                        <td>path</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->cat_id}}</td>
                            <td>{{$category->cat_name}}</td>
                            <td>{{$category->cat_img}}</td>
                            <td>{{$category->cat_avaible}}</td>
                            <td>{{$category->path}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('category.show',['id'=>$category->cat_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('category.edit',['id'=>$category->cat_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('category.delete',['id'=>$category->cat_id])}}" method="post">
                                    {{ method_field('DELETE')}}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>

@endsection