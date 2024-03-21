<?php

namespace App\Http\Controllers;
use App\Models\Discounts;
use App\Models\Products;
use Illuminate\Http\Request;

class DiscountsController extends Controller
{
    public function index()
    {
        $discounts = Discounts::with('product')->get();
        return view('discounts.index', ['discounts' => $discounts]);
    }

    public function create()
    {
        $products = Products::all(); // Fetch all products
        return view('discounts.create', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'percentage' => 'required|integer|min:1|max:100'
        ]);

        Discounts::create($request->all());

        return redirect()->route('discounts.index')->with('success', 'Discount created successfully.');
    }

    public function edit($id)
    {
        $discount = Discounts::findOrFail($id);
        $products = Products::all(); // Fetch all products
        return view('discounts.edit', ['discount' => $discount, 'products' => $products]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([    
            'product_id' => 'required|exists:products,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'percentage' => 'required|integer|min:1|max:100'
        ]);

        $discount = Discounts::findOrFail($id);
        $discount->update($request->all());

        return redirect()->route('discounts.index')->with('success', 'Discount updated successfully.');
    }

    public function destroy($id)
    {
        $customer = Discounts::findOrFail($id);
        $customer->delete();

        return redirect()->route('discounts.index')->with('success', 'Discounts deleted successfully!');
    }
}
