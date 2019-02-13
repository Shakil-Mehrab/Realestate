<?php


Route::get('/','frontController@welcome');
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


Route::group(['prefix'=>'super-admin','middleware'=>['admin']],function(){
//Action
Route::get('/view-property/{property_id}', [
    'uses'=>'ActionController@getViewProperty',
    'as'=>'property.view'
    ]); 
Route::get('/edit-property/{property_id}', [
    'uses'=>'ActionController@getEditProperty',
    'as'=>'property.edit'
     ]);
Route::post('/post-property/{property_id}', [
    'uses'=>'ActionController@postEditedProperty',
    'as'=>'post.edit'
    ]); 
Route::get('/delete-property/{delete_id}', [
    'uses'=>'ActionController@getDeleteProperty',
    'as'=>'property.delete'
    ]); 
//Agent
Route::get('/create-agent', [
    'uses'=>'AgentController@getCreateAgent',
    'as'=>'create.agent'
    ]);
Route::post('/post-agent', [
    'uses'=>'AgentController@postSubmitAgent',
    'as'=>'post.agent'
    ]);
Route::get('/agent', [
    'uses'=>'AgentController@getAgent',
    'as'=>'agent'
    ]);
Route::get('/agent-detail', [
    'uses'=>'AgentController@getAgentDetail',
    'as'=>'agent.detail'
    ]);
 Route::get('/agent-full-detail/{agent_id}', [
    'uses'=>'AgentController@getAgentDetail',
    'as'=>'agent.full.detail'
    ]);
     
});

 
//user Auth
Route::group(['prefix'=>'user','middleware'=>['auth']],function(){
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
Route::get('/view-property/{property_id}', [
    'uses'=>'ActionController@getViewProperty',
    'as'=>'property.view'
    ]); 

//Create Property 
Route::get('/property-input', [
    'uses'=>'AdminController@getPropertyInput',
    'as'=>'property.input'
    ]);
Route::get('/test', function() {
    $notifications=auth()->user()->unreadNotifications;
    foreach($notifications as $notification){
        dd($notification->data['user']['name']);
    } 
    }); 
Route::post('/post-property', [
    'uses'=>'AdminController@postSubmitProperty',
    'as'=>'post.property'
    ]);
Route::post('/post-images/{property_id}', [
    'uses'=>'MediaController@postSubmItimages',
    'as'=>'post.images'
    ]);
Route::post('/post-video/{property_id}', [
    'uses'=>'VideoController@postSubmitVideo',
    'as'=>'post.video'
    ]);
//Action
Route::post('/comment-store/{property_id}', [
    'uses'=>'CommentController@postCommentStore',
    'as'=>'comment.store'
    ]); 
Route::get('/comment-show/{comment_id}', [
    'uses'=>'CommentController@getCommentShow',
    'as'=>'comment.show'
    ]);
Route::post('/reply-store/{comment_id}', [
    'uses'=>'ReplyController@postReplyStore',
    'as'=>'reply.post'
    ]);
  
Route::post('/like-property', [
    'uses'=>'LikeController@toggleLike',
    'as'=>'toggleLike'
    ]);
});  
//front property
//all Property
Route::get('/all-properties', [
    'uses'=>'PropertyController@getAllProperty',
    'as'=>'all.properties'
    ]);
Route::get('/popular-properties', [
    'uses'=>'PropertyController@getAllPoplarProperty',
    'as'=>'popular.properties'
    ]);
Route::get('/property-more-detail/{property_id}', [
    'uses'=>'PropertyController@getpropertyMoreDetail',
    'as'=>'property.more.detail'
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
Route::get('/front-video', [
    'uses'=>'VideoController@getAllVideos',
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
Route::post('/target-property-search', [
    'uses'=>'frontController@postTargetPropertySearch',
    'as'=>'target.property.search'
    ]);
Route::get('/all-property', [
    'uses'=>'frontController@getAllProperty',
    'as'=>'all.property'
    ]);
Route::get('/detail-property/{detail_id}', [
    'uses'=>'frontController@getDetailProperty',
    'as'=>'detail.property'
    ]);
Route::get('/rating-test', [
    'uses'=>'frontController@rating',
    'as'=>'rating.test'
    ]);
Route::post('/subscriber-post', [
    'uses'=>'SubscriberController@postSubscriber',
    'as'=>'post.subscriber'
    ]);
Route::get('/edit-star', function () {
    return view('front.page.insrating');
});
