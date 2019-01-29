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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', [
    'uses'=>'frontController@getDashboard',
    'as'=>'dashboard'
    ]);

Route::get('/comming-soon', [
    'uses'=>'frontController@getCommingSoonProperty',
    'as'=>'comming.soon'
    ]);

Route::get('/header-one', [
    'uses'=>'frontController@getHeaderOne',
    'as'=>'header.one'
    ]);
Route::get('/header-two', [
    'uses'=>'frontController@getHeaderTwo',
    'as'=>'header.two'
    ]);
Route::get('/header-three', [
    'uses'=>'frontController@getHeaderThree',
    'as'=>'header.three'
    ]);
Route::get('/header-four', [
    'uses'=>'frontController@getHeaderFour',
    'as'=>'header.four'
    ]);
Route::get('/header-five', [
    'uses'=>'frontController@getHeaderFive',
    'as'=>'header.five'
    ]);
Route::get('/header-six', [
    'uses'=>'frontController@getHeaderSix',
    'as'=>'header.six'
    ]);
Route::get('/about-us', [
    'uses'=>'frontController@getAboutUs',
    'as'=>'about.us'
    ]);
Route::get('/faq', [
    'uses'=>'frontController@getFaqs',
    'as'=>'faqs'
    ]);
Route::get('/testimonial', [
    'uses'=>'frontController@getTestimonials',
    'as'=>'testimonials'
    ]);
Route::get('/agent', [
    'uses'=>'frontController@getAgent',
    'as'=>'agent'
    ]);
Route::get('/agent-detail', [
    'uses'=>'frontController@getAgentDetail',
    'as'=>'agent.detail'
    ]);
Route::get('/properties', [
    'uses'=>'frontController@getProperties',
    'as'=>'properties'
    ]);
Route::get('/property-list-view', [
    'uses'=>'frontController@getPropertyListView',
    'as'=>'property.list.view'
    ]);
Route::get('/property-grid-view', [
    'uses'=>'frontController@getPropertyGridView',
    'as'=>'property.grid.view'
    ]);
Route::get('/property-modern-view', [
    'uses'=>'frontController@getPropertyModernView',
    'as'=>'property.modern.view'
    ]);
Route::get('/property-detail', [
    'uses'=>'frontController@getpropertyDetail',
    'as'=>'property.detail'
    ]);
Route::get('/blog-default', [
    'uses'=>'frontController@getBlogDefault',
    'as'=>'blog.default'
    ]);
Route::get('/blog-list-view', [
    'uses'=>'frontController@getBlogListView',
    'as'=>'blog.list.view'
    ]);
Route::get('/blog-grid-view', [
    'uses'=>'frontController@getBlogyGridView',
    'as'=>'blog.grid.view'
    ]);
Route::get('/blog-detail', [
    'uses'=>'frontController@getBlogDetail',
    'as'=>'blog.detail'
    ]);
Route::get('/contact', [
    'uses'=>'frontController@getContact',
    'as'=>'contact'
    ]);

//Admin
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
Route::get('/bookings', [
    'uses'=>'frontController@getBookings',
    'as'=>'bookings'
    ]);
Route::get('/favourited-properties', [
    'uses'=>'frontController@getFavouritedProperties',
    'as'=>'favourited.properties'
    ]);
Route::get('/messege', [
    'uses'=>'frontController@getMessage',
    'as'=>'message'
    ]);
Route::get('/my-invouces', [
    'uses'=>'frontController@getMyInvoices',
    'as'=>'my.invoices'
    ]);
Route::get('/my-profile', [
    'uses'=>'frontController@getMyProfile',
    'as'=>'my.profile'
    ]);
Route::get('/my-properties', [
    'uses'=>'frontController@getMyProperties',
    'as'=>'my.properties'
    ]);
Route::get('/property-input', [
    'uses'=>'frontController@getPropertyInput',
    'as'=>'property.input'
    ]);
Route::post('/post-property', [
    'uses'=>'frontController@postSubmitProperty',
    'as'=>'post.property'
    ]);

});