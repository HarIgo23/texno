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
                    <form method="post" action="{{route('brand.store')}}">

                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="brand_name">Название компании</label>
                                <input type="text" id="brand_name" value="{{old('brand_name')}}" name="brand_name" class="form-control" placeholder="Название компание">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="cat_id">Категория -</label>
                                <select name="cat_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->cat_id}}" @if($category->cat_id==old('cat_id')) selected @endif >
                                            {{$category->cat_name}}
                                        </option>
                                    @endforeach
                                </select>
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
