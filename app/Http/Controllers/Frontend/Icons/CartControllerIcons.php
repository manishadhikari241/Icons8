<?php

namespace App\Http\Controllers\Frontend\Icons;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartControllerIcons extends Controller
{
    public function add_to_collection_icons(Request $request)
    {
        if ($request->ajax()) {
            $add = Cart::add(['id' => $request->icon_id, 'name' => 'icons', 'qty' => 1, 'price' => 9.99,]);
            $cartcontent = Cart::content();
//            Cart::destroy();
        }
    }
}
