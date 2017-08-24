<?php

use Illuminate\Http\Request;

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

Route::get('/', function (Request $request) {
    return "Framework version: " . App::version();
});
/**
 * GET listProducts
 * Summary:
 * Notes: Gets &#x60;Product&#x60; objects.
 * Output-Formats: [application/json]
 */
Route::get('/products', 'ProductsApi@listProducts');
/**
 * GET getProduct
 * Summary:
 * Notes: Gets one &#x60;Product&#x60; objects identified by ID.
 * Output-Formats: [application/json]
 */
Route::get('/products/{id}', 'ProductsApi@getProduct');
