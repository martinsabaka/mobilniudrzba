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

Route::get('/welcome', function () {
    return view('welcome');
});





 

// app/Http/routes.php

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	// Post Routes
	Route::get('/about', ['as' => 'about', 'uses' => 'IndexController@getAbout']);
	//Route::get('/advantages', ['as' => 'advantages', 'uses' => 'IndexController@getAdvantages'])->middleware('customer');

	Route::get('/application/', ['as' => 'application', 'uses' => 'IndexController@getApplication']);
	Route::get('/implementation', ['as' => 'implementation', 'uses' => 'IndexController@getImplementation']);
	Route::get('/technical', ['as' => 'technical', 'uses' => 'IndexController@getTechnical']);
	Route::get('/functionality', ['as' => 'functionality', 'uses' => 'IndexController@getFunctionality']);
	Route::get('/referrals', ['as' => 'referrals', 'uses' => 'IndexController@getReferrals']);

	Route::get('/our-story', ['as' => 'our-story', 'uses' => 'IndexController@getStory']);
	Route::get('/what-makes-us-different', ['as' => 'what-makes-us-different', 'uses' => 'IndexController@getDifferent']);
	Route::get('/our-team', ['as' => 'our-team', 'uses' => 'IndexController@getTeam']);
	Route::get('/where-we-are', ['as' => 'where-we-are', 'uses' => 'IndexController@getWhere']);
	Route::get('/contact', ['as' => 'contact', 'uses' => 'IndexController@getContact']);
	Route::get('/news', ['as' => 'news', 'uses' => 'IndexController@getNews']);
	Route::get('/support', ['as' => 'support', 'uses' => 'IndexController@getSupport']);
	Route::get('/technical-aspects', ['as' => 'technical-aspects', 'uses' => 'IndexController@getTechnicalAspects']);
	Route::get('/prod-sys-integration', ['as' => 'prod-sys-integration', 'uses' => 'IndexController@getProdSysIntegration']);
	Route::get('/visualization', ['as' => 'visualization', 'uses' => 'IndexController@getVisualization']);
	Route::get('/services-overview', ['as' => 'services-overview', 'uses' => 'IndexController@getServicesOverview']);

	//Post sub-Routes

	Route::get('/application/advantages', ['as' => 'application/advantages', 'uses' => 'IndexController@getApplicationAdvantages']);
	Route::get('/application/unique-features', ['as' => 'application/unique-features', 'uses' => 'IndexController@getApplicationFeatures']);
	Route::get('/application/assets', ['as' => 'application/assets', 'uses' => 'IndexController@getApplicationAssets']);
	Route::get('/application/how-works', ['as' => 'application/how-works', 'uses' => 'IndexController@getApplicationHowWorks']);
	Route::get('/application/story', ['as' => 'application/story', 'uses' => 'IndexController@getApplicationStory']);
	Route::get('/application/sap-integration', ['as' => 'application/sap-integration', 'uses' => 'IndexController@getApplicationSap']);

	//Referral sub-Routes
	Route::get('/skoda-auto', ['as' => 'skoda-auto', 'uses' => 'IndexController@getSkoda']);
	Route::get('/tdk', ['as' => 'tdk', 'uses' => 'IndexController@getTdk']);
	Route::get('/magna', ['as' => 'magna', 'uses' => 'IndexController@getMagna']);
	Route::get('/carrier', ['as' => 'carrier', 'uses' => 'IndexController@getCarrier']);
	Route::get('/nkt-cables', ['as' => 'nkt-cables', 'uses' => 'IndexController@getNkt']);
	Route::get('/fatra', ['as' => 'fatra', 'uses' => 'IndexController@getFatra']);
	Route::get('/miele', ['as' => 'miele', 'uses' => 'IndexController@getMiele']);
	Route::get('/matador', ['as' => 'matador', 'uses' => 'IndexController@getMatador']);
	Route::get('/embraco', ['as' => 'embraco', 'uses' => 'IndexController@getEmbraco']);
	Route::get('/kyb', ['as' => 'kyb', 'uses' => 'IndexController@getKyb']);
	Route::get('/hyundai-dymos', ['as' => 'hyundai-dymos', 'uses' => 'IndexController@getHyundai']);
	Route::get('/mecom', ['as' => 'mecom', 'uses' => 'IndexController@getMecom']);
	Route::get('/allianz', ['as' => 'allianz', 'uses' => 'IndexController@getAllianz']);
	Route::get('/stvs', ['as' => 'stvs', 'uses' => 'IndexController@getStvs']);
	Route::get('/baxter', ['as' => 'baxter', 'uses' => 'IndexController@getBaxter']);
	Route::get('/orange', ['as' => 'orange', 'uses' => 'IndexController@getOrange']);
	Route::get('/hanwha', ['as' => 'hanwha', 'uses' => 'IndexController@getHanwha']);
	Route::get('/lasselsberger', ['as' => 'lasselsberger', 'uses' => 'IndexController@getLasselsberger']);
	Route::get('/coavis', ['as' => 'coavis', 'uses' => 'IndexController@getCoavis']);
	Route::get('/saint-gobain', ['as' => 'saint-gobain', 'uses' => 'IndexController@getSaintgobain']);
	
	// Search

	Route::get('/search', ['as' => 'search', 'uses' => 'IndexController@search']);

	// Following routes are for editing posts

	Route::get('/quill/{id}', ['as' => 'quill', 'uses' => 'PostController@getQuill'])->middleware('admin'); 

	Route::post('/quill/edit', ['as' => 'edit', 'uses' => 'PostController@editPost'])->middleware('admin'); 

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/accessDenied', function() {
	    return view('auth/accessDenied');
	});

	Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index'])->middleware('admin');

	// Following routes are for dashboard manipulation 
	Route::resource('/dashboard/users', 'UserController')->middleware('admin');

	//updating blog
	Route::post('/blog/edit', ['as' => 'editBlog', 'uses' => 'PostController@updateBlog'])->middleware('admin'); 

	Route::post('/blog/create', ['as' => 'createBlog', 'uses' => 'PostController@createBlog'])->middleware('admin'); 

	// Forum part routes
	Route::resource('/dashboard/blogs', 'BlogController')->middleware('admin'); 

	Route::get('/blog', ['as' => 'blog', 'uses' => 'BlogController@getAllBlogs'])->middleware('customer');

	Route::get('/blog/{id}', ['as' => 'blogPost_detail', 'uses' => 'BlogController@showBlog'])->middleware('customer');

	//create comment
	Route::post('/blog/addComment', ['as' => 'addComment', 'uses' => 'CommentController@addComment'])->middleware('customer'); 

	//create reply
	Route::post('/blog/addReply', ['as' => 'addReply', 'uses' => 'ReplyController@addReply'])->middleware('admin'); 

	Route::get('/', ['as' => 'first' ,'uses' => 'IndexController@index']);
});