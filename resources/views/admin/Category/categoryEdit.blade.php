@extends('admin.layouts.app_admin')

@section('content')


    <div class="gtco-section gto-section-about"><!-- / сделал меньше отступ снизу при слиянии контактов и О НАС -->
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-10 animate-box feedback-form col-sm-offset-1">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{route('category.update',['id'=>$category->cat_id])}}">
                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="cat_name">Имя категории</label>
                                <input type="text" id="cat_name" value="{{$category->cat_name}}" name="cat_name" class="form-control" placeholder="Имя категории(30) ">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="cat_img_path">Путь к картинке</label>
                                <input type="text" id="cat_img" value="{{$category->cat_img}}" name="cat_img" class="form-control" placeholder="Путь к картинке(255)">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="cat_path">Путь</label>
                                <input type="text" id="cat_path" value="{{$category->path}}" name="path" class="form-control" placeholder="Путь(30)(на английском , как будет отображаться путь к категории в url)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="checkbox" id="cat_avaible" @if(boolval($category->cat_avaible))checked @endif name="cat_avaible">
                                <label for="cat_avaible">Доступна(по-умолчанию нет)</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Отправить" class="btn btn-primary">
                        </div>
                        {{ method_field('PUT')}}
                        {{csrf_field()}}
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
