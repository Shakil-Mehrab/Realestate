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

Route::get('/','frontController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
Route::get('/popular-properties', [
    'uses'=>'frontController@getPopularProperties',
    'as'=>'popular.properties'
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
Route::get('/property-more-detail/{property_id}', [
    'uses'=>'frontController@getpropertyMoreDetail',
    'as'=>'property.more.detail'
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
Route::post('/target-property-search', [
    'uses'=>'frontController@postTargetPropertySearch',
    'as'=>'target.property.search'
    ]);
Route::get('/all-property', [
    'uses'=>'frontController@getAllProperty',
    'as'=>'all.property'
    ]);
Route::post('/like-property', [
    'uses'=>'frontController@toggleLike',
    'as'=>'toggleLike'
    ]);

//Admin
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
Route::get('/dashboard', [
    'uses'=>'frontController@getDashboard',
    'as'=>'dashboard'
    ]);
Route::get('/bookings', [
    'uses'=>'AdminController@getBookings',
    'as'=>'bookings'
    ]);
Route::get('/favourited-properties', [
    'uses'=>'AdminController@getFavouritedProperties',
    'as'=>'favourited.properties'
    ]);
Route::get('/messege', [
    'uses'=>'AdminController@getMessage',
    'as'=>'message'
    ]);
Route::get('/my-invouces', [
    'uses'=>'AdminController@getMyInvoices',
    'as'=>'my.invoices'
    ]);
Route::get('/my-profile', [
    'uses'=>'AdminController@getMyProfile',
    'as'=>'my.profile'
    ]);
Route::get('/my-properties', [
    'uses'=>'AdminController@getMyProperties',
    'as'=>'my.properties'
    ]);
Route::get('/property-input', [
    'uses'=>'AdminController@getPropertyInput',
    'as'=>'property.input'
    ]);
Route::get('/create-agent', [
    'uses'=>'AdminController@getCreateAgent',
    'as'=>'create.agent'
    ]);
Route::post('/post-agent', [
    'uses'=>'AdminController@postSubmitAgent',
    'as'=>'post.agent'
    ]);
Route::post('/post-property', [
    'uses'=>'AdminController@postSubmitProperty',
    'as'=>'post.property'
    ]);
Route::get('/view-property', [
    'uses'=>'AdminController@getViewProperty',
    'as'=>'property.view'
    ]);
Route::get('/edit-property', [
    'uses'=>'AdminController@getEditProperty',
    'as'=>'property.edit'
    ]);
Route::post('/edited-property', [
    'uses'=>'AdminController@postEditedProperty',
    'as'=>'property.edited'
    ]);
Route::get('/delete-property', [
    'uses'=>'AdminController@getDeleteProperty',
    'as'=>'property.delete'
    ]);

});