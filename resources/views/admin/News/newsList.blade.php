@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Количество новостей: {{$news->total()}}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>news_id</td>
                        <td>text</td>
                        <td>img</td>
                        <td>href</td>
                        <td>visible</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $onenews)
                        <tr>
                            <td>{{$onenews->news_id}}</td>
                            <td>{{$onenews->text}}</td>
                            <td>{{$onenews->img}}</td>
                            <td>{{$onenews->href}}</td>
                            <td>{{$onenews->visible}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('news.show',['id'=>$onenews->news_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('news.edit',['id'=>$onenews->news_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('news.delete',['id'=>$onenews->news_id])}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$news->links()}}
            </div>
        </div>
    </div>

@endsection