<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RegisterControlller;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

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
// Route::get('/users', function () {
//     global $users;
//     $userNames=[];
//     foreach($users as $key  ){
//         $userNames[]=$key['name'];
//     }
//     $name=implode(', ', $userNames);
//     return "The users are: " .$name.",";
// });

// Route::get('/categories/skincare',function(Request $request){
//     return "Path: ".$request->path();
// });

    // Route::get('/categories/skincare',function(Request $request){
    //     return "Path: ".$request->url();
    // });
    // Route::get('/',function(Request $request){
    //     return "Path:" .$request->fullUrl();
    // });
    // Route::get('/',function(Request $request){
    //     return "Path:" .$request->fullUrlWithQuery(['name'=>'VuThanhTai']);
    // });

    // Route::get('/admin/post',function(Request $request){
    //     if($request ->is('admin')){
    //         return 'Request path mathches with "admin/* pattern';
    //     }
    // });

        // Route::get('/admin/post',function(Request $request){
        //     if($request ->is('admin/*')){
        //         return 'Request path mathches with "admin/* pattern';
        //     }
        // });

//         Route::get('/admin/post',function(Request $request){
//            echo 'Current method HTTP:' . $request->method().'</br>';
//            if($request->isMethod('GET')){
//             return "this is get method http";
//            }
//         });
// Route::get('userIp/',function(Request $request){
//     $ipAddress=$request->ip();
//     echo '<h1>Địa chỉ IP người dùng:' . $ipAddress.'</h1>';
// });


Route::get('/index',function(){
    return view('form');
});

Route::post('/post',[FormController::class,'post']);

Route::get('/register',function(){
    return view('formRegister');
});

Route::post('/postRegister',[RegisterControlller::class,'postRegister']);
Route::get('/upload',[UploadController::class,'getFile']);
Route::post('/upload',[UploadController::class,'uploadFile'])->name('uploadFile');