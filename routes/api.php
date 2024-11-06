<<?php

    use App\Http\Controllers\Api\AuthorController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('v1')->group(function () {

        Route::resource('author', AuthorController::class);
        Route::get('/test', function () {
            return view('welcome');
        });
    });
