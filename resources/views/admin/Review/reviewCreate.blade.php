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
                    <form method="post" action="{{route('review.store')}}">

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="author">Автор</label>
                                <input type="text" id="author" value="{{old('author')}}" name="author" class="form-control" placeholder="Автор отзыва(30)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="text">Текст обзора</label>
                                <textarea name="text" value="{{old('text')}}" id="text" cols="30" rows="10" class="form-control"
                                          placeholder="Текст обзора"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="img">Путь к фото</label>
                                <input type="text" id="img" value="{{old('img')}}"name="img" class="form-control" placeholder="Путь к фото(255)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="place">Место</label>
                                <input type="text" id="place" value="{{old('place')}}" name="place" class="form-control" placeholder="Место откуда взят отзыва(30)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="href_place">Ссылка</label>
                                <input type="text" id="href_place" value="{{old('href_place')}}"name="href_place" class="form-control" placeholder="Ссылка на обзор ,либо на ресурс(255)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="checkbox" id="visible" name="visible">
                                <label for="visible">Доступна(по-умолчанию нет)</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Отправить" class="btn btn-primary">
                        </div>

                        {{ csrf_field() }}

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
