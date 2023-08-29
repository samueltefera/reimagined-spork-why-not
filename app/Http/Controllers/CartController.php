<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        if ($request->wantsJson()) {
            $defaultTaxRate = 0;
            $taxOption = 'tax_option';
            $cartItems = $request->user()->cart()->get();
            if (!is_null( $cartItems)){
                // Calculate Tax rate (for example, 10%)
                $taxRate = Setting::where('key', $taxOption)->value('value', $defaultTaxRate); // 10%
                foreach ($cartItems as $cartItem) {
                    // Convert price to float
                    $price = floatval($cartItem->price);
            
                    // Calculate price with VAT
                    $priceWithVat = $price + ($price * ($taxRate /100));
            
                    // Add VAT field to the cart item
                    $cartItem->vat = number_format($priceWithVat - $price, 2); // Amount of VAT
                    $cartItem->price_with_vat = number_format($priceWithVat, 2); // Price with VAT formatted
            
                }
            }

            return response($cartItems);
        }
        return view('cart.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'barcode' => 'required|exists:products,barcode',
        ]);
        $barcode = $request->barcode;

        $product = Product::where('barcode', $barcode)->first();
        $cart = $request->user()->cart()->where('barcode', $barcode)->first();
        if ($cart) {
            // check product quantity
            if($product->quantity <= $cart->pivot->quantity) {
                return response([
                    'message' => 'Product available only: '. $product->quantity,
                ], 400);
            }
            // update only quantity
            $cart->pivot->quantity = $cart->pivot->quantity + 1;
            $cart->pivot->save();
        } else {
            if($product->quantity < 1) {
                return response([
                    'message' => 'Product out of stock',
                ], 400);
            }
            $request->user()->cart()->attach($product->id, ['quantity' => 1]);
        }

        return response('', 204);
    }

    public function changeQty(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = $request->user()->cart()->where('id', $request->product_id)->first();

        if ($cart) {
            $cart->pivot->quantity = $request->quantity;
            $cart->pivot->save();
        }

        return response([
            'success' => true
        ]);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id'
        ]);
        $request->user()->cart()->detach($request->product_id);

        return response('', 204);
    }

    public function empty(Request $request)
    {
        $request->user()->cart()->detach();

        return response('', 204);
    }
}
