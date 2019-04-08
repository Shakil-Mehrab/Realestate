<?php


Route::get('/','Layout\FrontController@welcome');
//front property
//all Property
Route::get('/property/detail/{property_id}', [
    'uses'=>'Layout\SinglePropertyController@getpropertyMoreDetail',
    'as'=>'property.detail'
    ]);
Route::get('/all/properties', [
    'uses'=>'Layout\FrontController@getAllProperty',
    'as'=>'all.properties'
    ]);
Route::get('/popular/properties', [
    'uses'=>'Layout\FrontController@getAllPoplarProperty',
    'as'=>'popular.properties'
    ]);
Route::get('/comming/soon', [
    'uses'=>'Layout\FrontController@getCommingSoonProperty',
    'as'=>'comming.soon'
    ]);
Route::get('/header/one', [
    'uses'=>'Layout\FrontController@getHeaderOne',
    'as'=>'header.one'
    ]);
Route::get('/header/two', [
    'uses'=>'Layout\FrontController@getHeaderTwo',
    'as'=>'header.two'
    ]);
Route::get('/header/three', [
    'uses'=>'Layout\FrontController@getHeaderThree',
    'as'=>'header.three'
    ]);
Route::get('/header/four', [
    'uses'=>'Layout\FrontController@getHeaderFour',
    'as'=>'header.four'
    ]);
Route::get('/header/five', [
    'uses'=>'Layout\FrontController@getHeaderFive',
    'as'=>'header.five'
    ]);
Route::get('/front/video', [
    'uses'=>'Layouts\VideoController@getAllVideos',
    'as'=>'header.six'
    ]);
Route::get('/about/us', [
    'uses'=>'Layout\AboutController@getAboutUs',
    'as'=>'about.us'
    ]);
Route::get('/faq', [
    'uses'=>'Layout\AboutController@getFaqs',
    'as'=>'faqs'
    ]);
Route::get('/testimonial', [
    'uses'=>'Layout\AboutController@getTestimonials',
    'as'=>'testimonials'
    ]);
Route::get('/properties', [
    'uses'=>'Layout\PropertyController@getProperties',
    'as'=>'properties'
    ]);

Route::get('/property/list/view', [
    'uses'=>'Layout\PropertyController@getPropertyListView',
    'as'=>'property.list.view'
    ]);
Route::get('/property/grid/view', [
    'uses'=>'Layout\PropertyController@getPropertyGridView',
    'as'=>'property.grid.view'
    ]);
Route::get('/property/modern/view', [
    'uses'=>'Layout\PropertyController@getPropertyModernView',
    'as'=>'property.modern.view'
    ]);
Route::get('/blog/default', [
    'uses'=>'Layout\BlogController@getBlogDefault',
    'as'=>'blog.default'
    ]);
Route::get('/blog/list/view', [
    'uses'=>'Layout\BlogController@getBlogListView',
    'as'=>'blog.list.view'
    ]);
Route::get('/blog/grid/view', [
    'uses'=>'Layout\BlogController@getBlogyGridView',
    'as'=>'blog.grid.view'
    ]);
Route::get('/blog/detail', [
    'uses'=>'Layout\BlogController@getBlogDetail',
    'as'=>'blog.detail'
    ]);
Route::get('/contact', [
    'uses'=>'Layout\ContactController@getContact',
    'as'=>'contact'
    ]);
Route::get('/all/property', [
    'uses'=>'Layout\frontController@getAllProperty',
    'as'=>'all.property'
    ]);
Route::get('/front/agent', [
    'uses'=>'Layout\AgentController@getAgent',
    'as'=>'front.agent'
    ]);
Route::get('/agent/detail/{agent_id}', [
    'uses'=>'Layout\AgentController@getAgentDetail',
    'as'=>'agent.detail'
    ]);
Route::post('/subscriber/post', [
    'uses'=>'Layout\SubscriberController@postSubscriber',
    'as'=>'post.subscriber'
    ]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
});


Route::group(['prefix'=>'super/admin','middleware'=>['admin']],function(){
//Action 
Route::post('/property/delete', [
    'uses'=>'Layouts\PropertyController@getDeleteProperty',
    'as'=>'property.delete'
    ]); 
//Agent
Route::get('/agent/index', [
    'uses'=>'Layouts\AgentController@Index',
    'as'=>'agent.index'
    ]);
Route::get('/agent/create', [
    'uses'=>'Layouts\AgentController@create',
    'as'=>'agent.create'
    ]);
Route::post('/agent/store', [
    'uses'=>'Layouts\AgentController@store',
    'as'=>'agent.store'
    ]);
Route::get('/agent/edit/{agent_id}', [
    'uses'=>'Layouts\AgentController@edit',
    'as'=>'agent.edit'
    ]);
Route::post('/agent/update/{agent_id}', [
    'uses'=>'Layouts\AgentController@update',
    'as'=>'agent.update'
    ]);
Route::post('/agent/delete', [
    'uses'=>'Layouts\AgentController@delete',
    'as'=>'agent.delete'
    ]);
});

 
//user Auth
Route::group(['prefix'=>'user','middleware'=>['auth']],function(){
//Categories
Route::get('/category/index', [
    'uses'=>'Layouts/CategoryController@index',
    'as'=>'category.index'
    ]); 
Route::get('/category/index', [
    'uses'=>'Layouts\CategoryController@Index',
    'as'=>'category.index'
    ]);
Route::post('/category/store', [
    'uses'=>'Layouts\CategoryController@store',
    'as'=>'category.store'
    ]);
Route::post('/category/update/{category_id}', [
    'uses'=>'Layouts\CategoryController@update',
    'as'=>'category.update'
    ]);
Route::post('/category/delete', [
    'uses'=>'Layouts\CategoryController@delete',
    'as'=>'category.delete'
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
Route::get('/my/properties', [
    'uses'=>'AdminController@getMyProperties',
    'as'=>'my.properties'
    ]);

//Create Property 
Route::get('/property/create', [
    'uses'=>'Layouts\PropertyController@crate',
    'as'=>'property.input'
    ]);
Route::post('/property/store', [
    'uses'=>'Layouts\PropertyController@store',
    'as'=>'property.store'
    ]);
Route::get('/property/edit/{property_id}', [
    'uses'=>'Layouts\PropertyController@getEditProperty',
    'as'=>'property.edit'
     ]);
Route::post('/property/update/{property_id}', [
    'uses'=>'Layouts\PropertyController@postEditedProperty',
    'as'=>'property.update'
    ]);
Route::post('/images/store/{property_id}', [
    'uses'=>'Layouts\MediaController@postSubmItimages',
    'as'=>'post.images'
    ]);
Route::post('/video/store/{property_id}', [
    'uses'=>'Layouts\VideoController@postSubmitVideo',
    'as'=>'video.store'
    ]);
//Action
Route::resource('/review','Layouts\CommentController');
Route::post('/reply-store', [
    'uses'=>'Layouts\ReplyController@postReplyStore',
    'as'=>'reply.post'
    ]);
  
Route::post('/like-property', [
    'uses'=>'LikeController@toggleLike',
    'as'=>'toggleLike'
    ]);
});  
