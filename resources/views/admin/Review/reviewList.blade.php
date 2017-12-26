@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Количество обзоров: {{$reviews->total()}}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>review_id</td>
                        <td>author</td>
                        <td>text</td>
                        <td>img</td>
                        <td>place</td>
                        <td>href_place</td>
                        <td>visible</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reviews as $review)
                        <tr>
                            <td>{{$review->review_id}}</td>
                            <td>{{$review->author}}</td>
                            <td>{{$review->text}}</td>
                            <td>{{$review->img}}</td>
                            <td>{{$review->place}}</td>
                            <td>{{$review->href_place}}</td>
                            <td>{{$review->visible}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('review.show',['id'=>$review->review_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('review.edit',['id'=>$review->review_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('review.delete',['id'=>$review->review_id])}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$reviews->links()}}
            </div>
        </div>
    </div>

@endsection