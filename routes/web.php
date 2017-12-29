<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', 'MainController@index')->name('mainPage');

Route::get('about', 'AboutController@index')->name('aboutPage');

Route::get('catalog', 'CatalogController@index')->name('catalogPage');

//если после категории только цифра выберет этот роут
Route::get('catalog/{categories}', 'CategoryController@index')
        ->name('categoriesPage');

//если после категории только смешанная либо из символо выберет этот роут
//либо сделать роут не зависящий от категории ,так как категория и не нужна
//при просмотре продукта
Route::get('catalog/{categories}/{product}', 'ProductController@index')->name('productPage');

Route::get('/admin','Admin\DashboardController@dashboard')->name('adminPage');

Route::get('autocomplete','SearchController@autocomplete')->name('autocomplete');
Route::post('productSearch','SearchController@productSearch')->name('product.Search');
Route::post('catalog/{categories}','CategoryController@sort')->name('sort');
Route::post('buy/{prod_id}','AboutController@buy')->name('buy');

/*
 * CRUD
 * CATEGORY
 * */

Route::get('/admin/category/list',           'Admin\AdminCategoryController@listShow') ->name('category.list');
Route::get('/admin/category/show/{id}',      'Admin\AdminCategoryController@show')     ->name('category.show');
Route::get('/admin/category/create',         'Admin\AdminCategoryController@create')   ->name('category.create');
Route::post('/admin/category/create',        'Admin\AdminCategoryController@store')    ->name('category.store');
Route::get('/admin/category/edit/{id}',      'Admin\AdminCategoryController@edit')     ->name('category.edit');
Route::put('/admin/category/update/{id}',    'Admin\AdminCategoryController@update')   ->name('category.update');
Route::delete('/admin/category/delete/{id}', 'Admin\AdminCategoryController@delete')   ->name('category.delete');

/*
 * CRUD
 * PRODUCT
 * */

Route::get('/admin/product/list',           'Admin\AdminProductController@listShow') ->name('product.list');
Route::get('/admin/product/show/{id}',      'Admin\AdminProductController@show')     ->name('product.show');
Route::get('/admin/product/create',         'Admin\AdminProductController@create')   ->name('product.create');
Route::post('/admin/product/create',        'Admin\AdminProductController@store')    ->name('product.store');
Route::get('/admin/product/edit/{id}',      'Admin\AdminProductController@edit')     ->name('product.edit');
Route::put('/admin/product/update/{id}',    'Admin\AdminProductController@update')   ->name('product.update');
Route::delete('/admin/product/delete/{id}', 'Admin\AdminProductController@delete')   ->name('product.delete');

/*
 * CRUD
 * Brand
 * */

Route::get('/admin/brand/list',           'Admin\AdminBrandController@listShow') ->name('brand.list');
Route::get('/admin/brand/show/{id}',      'Admin\AdminBrandController@show')     ->name('brand.show');
Route::get('/admin/brand/create',         'Admin\AdminBrandController@create')   ->name('brand.create');
Route::post('/admin/brand/create',        'Admin\AdminBrandController@store')    ->name('brand.store');
Route::get('/admin/brand/edit/{id}',      'Admin\AdminBrandController@edit')     ->name('brand.edit');
Route::put('/admin/brand/update/{id}',    'Admin\AdminBrandController@update')   ->name('brand.update');
Route::delete('/admin/brand/delete/{id}', 'Admin\AdminBrandController@delete')   ->name('brand.delete');

/*
 * CRUD
 * SPECIFICATION
 * */

Route::get('/admin/specification/list',           'Admin\AdminSpecificationController@listShow') ->name('specification.list');
Route::get('/admin/specification/show/{id}',      'Admin\AdminSpecificationController@show')     ->name('specification.show');
Route::get('/admin/specification/create',         'Admin\AdminSpecificationController@create')   ->name('specification.create');
Route::post('/admin/specification/create',        'Admin\AdminSpecificationController@store')    ->name('specification.store');
Route::get('/admin/specification/edit/{id}',      'Admin\AdminSpecificationController@edit')     ->name('specification.edit');
Route::put('/admin/specification/update/{id}',    'Admin\AdminSpecificationController@update')   ->name('specification.update');
Route::delete('/admin/specification/delete/{id}', 'Admin\AdminSpecificationController@delete')   ->name('specification.delete');

/*
 * CRUD
 * NEWS
 * */

Route::get('/admin/news/list',           'Admin\AdminNewsController@listShow') ->name('news.list');
Route::get('/admin/news/show/{id}',      'Admin\AdminNewsController@show')     ->name('news.show');
Route::get('/admin/news/create',         'Admin\AdminNewsController@create')   ->name('news.create');
Route::post('/admin/news/create',        'Admin\AdminNewsController@store')    ->name('news.store');
Route::get('/admin/news/edit/{id}',      'Admin\AdminNewsController@edit')     ->name('news.edit');
Route::put('/admin/news/update/{id}',    'Admin\AdminNewsController@update')   ->name('news.update');
Route::delete('/admin/news/delete/{id}', 'Admin\AdminNewsController@delete')   ->name('news.delete');

/*
 * CRUD
 * Review
 * */

Route::get('/admin/review/list',           'Admin\AdminReviewController@listShow') ->name('review.list');
Route::get('/admin/review/show/{id}',      'Admin\AdminReviewController@show')     ->name('review.show');
Route::get('/admin/review/create',         'Admin\AdminReviewController@create')   ->name('review.create');
Route::post('/admin/review/create',        'Admin\AdminReviewController@store')    ->name('review.store');
Route::get('/admin/review/edit/{id}',      'Admin\AdminReviewController@edit')     ->name('review.edit');
Route::put('/admin/review/update/{id}',    'Admin\AdminReviewController@update')   ->name('review.update');
Route::delete('/admin/review/delete/{id}', 'Admin\AdminReviewController@delete')   ->name('review.delete');