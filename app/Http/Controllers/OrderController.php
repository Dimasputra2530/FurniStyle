<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'postalCode' => 'required|string',
            'notes' => 'nullable|string',
            'payment' => 'required|in:transfer,cod',
            'products' => 'required',
        ]);

        Order::create([
            'full_name' => $validated['fullName'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'city' => $validated['city'],
            'postal_code' => $validated['postalCode'],
            'notes' => $validated['notes'] ?? null,
            'payment_method' => $validated['payment'],
            'products' => $validated['products'],
        ]);

        return redirect('/thank-you')->with('success', 'Pesanan berhasil dikirim!');
    }
}
