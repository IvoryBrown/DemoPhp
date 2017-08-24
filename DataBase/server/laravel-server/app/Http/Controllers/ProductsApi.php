<?php

/**
 * demo
 * Egy alkalmazás megvalósítása amely az adatbázisból termékeket jelenít meg egy listában (termék névvel, rövid leírással és árral). A listában minden termékhez tartozzon egy hivatkozás amelyre kattintva a megjelenik a termék részletes leírása egy külön oldalon.
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


namespace App\Http\Controllers;

use App\Models\ErrorMessage;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
class ProductsApi extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation listProducts
     *
     * @return Http response
     */
    public function listProducts()
    {
        $products = DB::table('products')->get();
        return response()->json($products);
    }
    /**
     * Operation getProduct
     *
     * @param float $id Id of the product. (required)
     *
     * @return Http response
     */
    public function getProduct($id)
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        $product= DB::table('products')->where('id', $id)->first();
        if(!$product){
            return response()->json(new ErrorMessage(404,"Model not found"),404);
        }
        return response()->json($product);
    }
}
