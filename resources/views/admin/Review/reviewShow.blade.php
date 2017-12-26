@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="item">
                <div class="testimony-slide active text-center">
                    <figure>
                        <img src="{{$review->img}}" alt="user">
                    </figure>
                    <span>{{$review->author}}, <a href="#" class="twitter">{{$review->place}}</a></span>
                    <blockquote>
                        <p>&ldquo;{{$review->text}}.&rdquo;</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

@endsection