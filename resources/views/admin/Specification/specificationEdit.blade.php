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
                    <form method="post" action="{{route('specification.update',['id'=>$specification->specification_id])}}">

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="spec_name">Название модели</label>
                                <input type="text" id="spec_name" value="{{$specification->spec_name}}" name="spec_name" class="form-control" placeholder="Название модели(30)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="description">Описание</label>
                                <textarea name="description" value="{{$specification->description}}" id="description" cols="30" rows="10" class="form-control"
                                          placeholder="Описание"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img1">Путь к фото 1(Превью)</label>
                                <input type="text" id="spec_img1" value="{{$specification->spec_img1}}" name="spec_img1" class="form-control" placeholder="Путь к фото(255)(Обязательно)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img2">Путь к фото 2</label>
                                <input type="text" id="spec_img2" value="{{$specification->spec_img2}}" name="spec_img2" class="form-control" placeholder="Путь к фото(255)(Не обязательно)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img3">Путь к фото 3</label>
                                <input type="text" id="spec_img3" value="{{$specification->spec_img3}}" name="spec_img3" class="form-control" placeholder="Путь к фото(255)(Не обязательно)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img4">Путь к фото 4</label>
                                <input type="text" id="spec_img4" value="{{$specification->spec_img4}}" name="spec_img4" class="form-control" placeholder="Путь к фото(255)(Не обязательно)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img5">Путь к фото 5</label>
                                <input type="text" id="spec_img5" value="{{$specification->spec_img5}}" name="spec_img5" class="form-control" placeholder="Путь к фото(255)(Не обязательно)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="spec_img6">Путь к фото 6</label>
                                <input type="text" id="spec_img6" value="{{$specification->spec_img6}}" name="spec_img6" class="form-control" placeholder="Путь к фото(255)(Не обязательно)">
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Отправить" class="btn btn-primary">
                        </div>
                        {{method_field('PUT')}}
                        {{ csrf_field() }}

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
