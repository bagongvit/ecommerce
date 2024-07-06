<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function delete_cart($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->delete();
            return redirect()->back()->with('success', 'Item removed from cart');
        } else {
            return redirect()->back()->with('error', 'Item not found');
        }
    }
}
