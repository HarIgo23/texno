@extends('admin.layouts.app_admin')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Категорий 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Материалов 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Посетителей 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Сегодня 0</span></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row ">
    <div class="col-sm-5 col-sm-offset-1">
      <a class="btn btn-block btn-default" href="{{route('category.create')}}">Создать категорию</a>
      <a href="{{route('category.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Категории</h4>
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-0">
      <a class="btn btn-block btn-default" href="{{route('product.create')}}">Создать товар</a>
      <a href="{{route('product.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Товары</h4>
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-1">
      <a class="btn btn-block btn-default" href="{{route('specification.create')}}">Создать описание товаров</a>
      <a href="{{route('specification.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Описание товаров</h4>
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-0">
      <a class="btn btn-block btn-default" href="{{route('brand.create')}}">Создать производителя</a>
      <a href="{{route('brand.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Производители</h4>
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-1">
      <a class="btn btn-block btn-default" href="{{route('news.create')}}">Создать новость</a>
      <a href="{{route('news.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Новости</h4>
      </a>
    </div>
    <div class="col-sm-5 col-sm-offset-0">
      <a class="btn btn-block btn-default" href="{{route('review.create')}}">Создать обзор</a>
      <a href="{{route('review.list')}}" class="list-group-item">
        <h4 class="list-group-item-heading">Обзоры</h4>
      </a>
    </div>
  </div>
@endsection
