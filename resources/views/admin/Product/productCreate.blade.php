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
                    <form method="post" action="{{route('product.store')}}">

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="name">Название продукта</label>
                                <input type="text" id="name" value="{{old('name')}}" name="name" class="form-control"
                                       placeholder="Название продукта(30)">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="img">Путь к фото</label>
                                <input type="text" id="img" value="{{old('img')}}" name="img" class="form-control"
                                placeholder="Путь к фото(255)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-7">
                                <label for="price">Цена</label>
                                <input type="text" id="price" value="{{old('price')}}" name="price" class="form-control"
                                       placeholder="Цифры(10)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="cat_id">Категория -</label>
                                <select name="cat_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->cat_id}}" @if($category->cat_id==old('cat_id')) selected @endif>
                                            {{$category->cat_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="brand_id">Производитель -</label>
                                <select name="brand_id">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->brand_id}}" @if($brand->brand_id==old('brand_id')) selected @endif>
                                            {{$brand->brand_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="specification_id">Характеристики -</label>
                                <select name="specification_id">
                                    @foreach($specifications as $specification)
                                        <option value="{{$specification->specification_id}}" @if($specification->specification_id==old("specification_id")) selected @endif>
                                            {{$specification->spec_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="checkbox" id="avaible" name="avaible">
                                <label for="avaible">Доступна(по-умолчанию нет)</label>
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
