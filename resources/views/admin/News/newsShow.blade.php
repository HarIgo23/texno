@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-8">
                <a href="{{$news->href}}"><h2>{{$news->text}}</h2>
                    <img class="img-responsive picto-img" src="{{$news->img}}" width="300" height="300" alt="">
                </a>
            </div>
        </div>
    </div>

@endsection