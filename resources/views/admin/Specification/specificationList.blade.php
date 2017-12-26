@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3>Количество обзоров: {{$specifications->total()}}</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <td>specification_id</td>
                        <td>description</td>
                        <td>spec_img1</td>
                        <td>spec_img2</td>
                        <td>spec_img3</td>
                        <td>spec_img4</td>
                        <td>spec_img5</td>
                        <td>spec_img6</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($specifications as $specification)
                        <tr>
                            <td>{{$specification->specification_id}}</td>
                            <td>{{$specification->description}}</td>
                            <td>{{$specification->spec_img1}}</td>
                            <td>{{$specification->spec_img2}}</td>
                            <td>{{$specification->spec_img3}}</td>
                            <td>{{$specification->spec_img4}}</td>
                            <td>{{$specification->spec_img5}}</td>
                            <td>{{$specification->spec_img6}}</td>
                            <td>
                                <a class="btn btn-secondary" href="{{route('specification.show',['id'=>$specification->specification_id])}}"
                                   role="button">Посмотреть</a>
                                <a class="btn btn-secondary" href="{{route('specification.edit',['id'=>$specification->specification_id])}}"
                                   role="button">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('specification.delete',['id'=>$specification->specification_id])}}" method="post">
                                    {{ method_field('DELETE') }}
                                    {{csrf_field()}}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$specifications->links()}}
            </div>
        </div>
    </div>

@endsection