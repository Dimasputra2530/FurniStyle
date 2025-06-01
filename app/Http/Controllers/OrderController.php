<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = $request->input('cart');
        Log::info('Data cart masuk:', ['cart' => $cart]); // Logging cart secara aman

        if (!is_array($cart)) {
            return response()->json(['message' => 'Invalid cart data'], 400);
        }

        foreach ($cart as $item) {
            // Validasi data item
            if (
                !isset($item['name']) ||
                !isset($item['price']) ||
                !isset($item['quantity'])
            ) {
                Log::warning('Item tidak lengkap:', ['item' => $item]);
                continue;
            }

            try {
                DB::table('orders')->insert([
                    'product_name' => $item['name'],
                    'price'        => $item['price'],
                    'quantity'     => $item['quantity'],
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);

                Log::info('Berhasil simpan item:', ['item' => $item]);
            } catch (\Exception $e) {
                Log::error('Gagal insert:', [
                    'error' => $e->getMessage(),
                    'data'  => $item,
                ]);

                return response()->json(['message' => 'Gagal simpan ke database'], 500);
            }
        }

        return response()->json(['message' => 'Pesanan berhasil disimpan']);
    }
}
