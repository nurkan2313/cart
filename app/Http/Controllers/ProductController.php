<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ProductController extends Controller
{
    public function home() {
//        Session::remove('cart');
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function addToCart(Request $request, $id) {
        $product = Product::find($id);
        $cartSession = Session::has('cart') ? Session::get('cart') : null;

        $newCart = new Cart($cartSession);
        $newCart->add($product, $product->id);
        $request->session()->put('cart', $newCart);
        $result = Session::get('cart');
        return response()->json([$result]);
    }

    public function removeFromCart(Request $request, $id, $price) {
        $product = Product::find($id);
        $cartSession = Session::has('cart') ? Session::get('cart') : null;

        $newCart = new Cart($cartSession);
        $newCart->remove($product->id, $price);
        $request->session()->put('cart', $newCart);
        $result = Session::get('cart');

        return response()->json([$result]);
    }

    public function productDetail($id) {
        $product = Product::find($id);
        return view('shop.detail', ['product' => $product]);
    }

    public function cart() {
        if(!Session::has('cart')) {
            return view('shop.cart', ['products' => null]);
        }
        $cartSession = Session::get('cart');
        $newCart = new Cart($cartSession);

        return view('shop.cart', [
            'products' => $newCart->items,
            'total' => $newCart->totalPrice,

        ]);
    }




}
