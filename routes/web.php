<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// //http verbs (get, post, put/patch, delete, any, match)
// Route::get('/user', function(){
//     return 'User access';
// });

// Route::post('/user', function(){
//     return 'User created successfully';
// });

// Route::put('/user/{id}', function($id){
//     return 'User with ID ' . $id . ' updated successfully';
// });

// Route::patch('/user/{id}', function($id){
//     return 'User with ID ' . $id . ' partially updated successfully';
// });

// Route::delete('/user/{id}', function($id){
//     return 'User with ID ' . $id . ' deleted successfully';
// });

// Route::any('/anything', function(){
//     return 'Match any http method';
// });

// Route::match(['get', 'post'], '/user', function(){
//     return 'Match GET or POST method';
// });

// //Route parameter
// Route::get('/user/{id}', function($id){
//     return 'User with ID ' . $id . ' accessed via GET method';
// });

// //optional route parameter
// Route::get('/user/{id?}', function($id = null){
//     if($id){
//         return 'User with ID ' . $id . ' accessed via GET method';
//     }
//     return 'User accessed via GET method without ID';
// });

// //multiple parameter
// Route::get('/user/{id}/{name}', function($id, $name){
//     return 'User with ID ' . $id . ' and Name ' . $name . ' accessed via GET method';
// });

// //named parameter
// Route::get('/user/{id}',function($id){
//     return "User id {$id}";
// })->name('user.show');

// //grouping
// Route::prefix('admin') -> group (function() {
//    // route paramater
//     Route::get('/dashboard', function () {
//     return "Admin dashboard";
//     });

//     Route::get('/setting', function () {
//     return "Admin settings";
//     });
// });


//middleware
Route::middleware(['auth'])->group(function(){
    Route::get('/profile', function(){
        return 'User profile';
    });
});

//combine
Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::get('/dashboard',function(){
        return 'Admin Dashboard';
    });
});


//constraint
Route::get('/user/{id}',function($id){
    return "User with ID {$id}";
})->where ('id','[0-9]+');

Route::get('/post/{slug}',function($slug){
    return "Post with slug {$slug}";
})->where ('slug','[a-zA-Z0-9-]+');

//fallback
Route::fallback(function(){
    return view('errors.404');
});