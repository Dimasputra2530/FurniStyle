<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request)
    {
        try {
            $validated = $request->validate([
                'product_id' => 'required|integer|exists:products,id',
                'quantity'   => 'nullable|integer|min:1|max:999',
            ]);

            $userId = Auth::id();
            if (!$userId) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Please login to add items to cart'
                ], 401);
            }

            $quantity = $validated['quantity'] ?? 1;
            $product = Product::find($validated['product_id']);

            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Product not found'
                ], 404);
            }

            if (isset($product->stock) && $product->stock < $quantity) {
                return response()->json([
                    'success' => false,
                    'message' => 'Insufficient stock available'
                ], 400);
            }

            $cartItem = CartItem::where('user_id', $userId)
                ->where('product_id', $validated['product_id'])
                ->first();

            if ($cartItem) {
                $newQuantity = $cartItem->quantity + $quantity;

                if (isset($product->stock) && $product->stock < $newQuantity) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Cannot add more items. Max: ' . ($product->stock - $cartItem->quantity)
                    ], 400);
                }

                $cartItem->update([
                    'quantity' => $newQuantity,
                    'updated_at' => now(),
                ]);

                $message = 'Cart updated successfully';
            } else {
                $cartItem = CartItem::create([
                    'user_id'    => $userId,
                    'product_id' => $validated['product_id'],
                    'quantity'   => $quantity,
                ]);

                $message = 'Product added to cart successfully';
            }

            $cartCount = CartItem::where('user_id', $userId)->sum('quantity');

            return response()->json([
                'success' => true,
                'message' => $message,
                'cart_item' => $cartItem,
                'cart_count' => $cartCount,
                'product_name' => $product->name ?? 'Product'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid input data',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            \Log::error('Cart add error: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    public function index()
    {
        $userId = Auth::id();
        $cartItems = CartItem::with('product')->where('user_id', $userId)->get();
        return view('cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
    // Validasi atau logika insert cart
    return response()->json([
        'success' => true,
        'message' => 'Produk berhasil ditambahkan ke keranjang.'
    ]);
    }

}
