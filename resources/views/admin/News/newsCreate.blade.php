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
                    <form method="post" action="{{route('news.store')}}">

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="text">Новость</label>
                                <input type="text" id="text" value="{{old('text')}}" name="text" class="form-control" placeholder="Краткое описание новости(255)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="img">Путь к картинке</label>
                                <input type="text" id="img" value="{{old('img')}}" name="img" class="form-control" placeholder="Путь к картинке(255)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="href">Ссылка</label>
                                <input type="text" id="href" value="{{old('href')}}" name="href" class="form-control" placeholder="Ссылка на новость(255)">
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
