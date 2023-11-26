<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostController;  
    //外部にあるPostControllerクラスをインポート。
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
    Route::get('/', [PostController::class, 'index']);  
    Route::get('/posts', [PostController::class, 'index']);  
    // '/posts'にGetリクエストが来たら、PostControllerのindexメソッドを実行する
    Route::get('/posts/create', [PostController::class, 'create']);
    // ここに書かないと、下ルーティングに引っかかり、うまく動作しない。
    Route::get('/posts/{post}', [PostController::class ,'show']);
    // '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
?>