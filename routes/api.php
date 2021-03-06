<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\GithubController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/github', [GithubController::class, 'index'])->name('github_index');
Route::get('/github/{name}/repos', [GithubController::class, 'getRepos'])->name('github_repos');