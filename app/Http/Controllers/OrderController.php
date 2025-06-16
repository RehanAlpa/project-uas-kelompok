<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

    
    // Tampilkan semua pesanan
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Tampilkan form tambah pesanan
    public function create()
    {
        Order::create([
    'user_id' => Auth::id(),
    'product_name' => $request->input('product_name'),
    'quantity' => $request->input('quantity'),
]);

        return view('orders.create');
    }

    // Simpan pesanan baru
    public function store(Request $request)
    {
        dd(Auth::check(), Auth::id()); // Tambahkan di sini untuk cek user login atau tidak
        // Validasi input (opsional, bisa tambahkan nanti)
        $request->validate([
            'product_name' => 'required|string',
            'quantity' => 'required|integer|min:1'
        ]);

        // Simpan pesanan ke database
        Order::create([
            'user_id' => auth()->id(),
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    // Tampilkan detail pesanan
    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    // Tampilkan form edit pesanan
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    // Simpan update pesanan
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'produk' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:20',
        ]);

        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    // Hapus pesanan
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}
