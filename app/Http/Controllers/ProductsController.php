<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:buah,sayur',
            'price' => 'required|numeric',
            'stok' => 'required|integer',
            'img1' => 'required|image|max:2048',
            'img2' => 'nullable|image|max:2048',
            'img3' => 'nullable|image|max:2048',
            'desc' => 'nullable|string',
        ]);

        $product = new Products();
        $product->product_name = $request->input('name');
        $product->category = $request->input('category');
        $product->price = $request->input('price');
        $product->stok = $request->input('stok');
        $product->deskripsi = $request->input('desc');

        // Upload and store image 1
        if ($request->hasFile('img1')) {
            $image1 = $request->file('img1');
            $imageName1 = uniqid('product_image_') . '.' . $image1->getClientOriginalExtension();
            $image1->storeAs('public/product_images', $imageName1);
            $product->foto1 = $imageName1;
        }

        // Upload and store image 2 if provided
        if ($request->hasFile('img2')) {
            $image2 = $request->file('img2');
            $imageName2 = uniqid('product_image_') . '.' . $image2->getClientOriginalExtension();
            $image2->storeAs('public/product_images', $imageName2);
            $product->foto2 = $imageName2;
        }

        // Upload and store image 3 if provided
        if ($request->hasFile('img3')) {
            $image3 = $request->file('img3');
            $imageName3 = uniqid('product_image_') . '.' . $image3->getClientOriginalExtension();
            $image3->storeAs('public/product_images', $imageName3);
            $product->foto3 = $imageName3;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:buah,sayur',
            'price' => 'required|numeric',
            'stok' => 'required|integer',
            'desc' => 'nullable|string|max:255',
        ]);

        $product = Products::findOrFail($id);
        $product->product_name = $validatedData['name'];
        $product->category = $validatedData['category'];
        $product->price = $validatedData['price'];
        $product->stok = $validatedData['stok'];
        $product->deskripsi = $validatedData['desc'];

        // Update image 1 if provided
        if ($request->hasFile('img1')) {
            $image1 = $request->file('img1');
            $imageName1 = uniqid('product_image_') . '.' . $image1->getClientOriginalExtension();
            $image1->storeAs('public/product_images', $imageName1);
            $product->foto1 = $imageName1;
        }

        // Update image 2 if provided
        if ($request->hasFile('img2')) {
            $image2 = $request->file('img2');
            $imageName2 = uniqid('product_image_') . '.' . $image2->getClientOriginalExtension();
            $image2->storeAs('public/product_images', $imageName2);
            $product->foto2 = $imageName2;
        }

        // Update image 3 if provided
        if ($request->hasFile('img3')) {
            $image3 = $request->file('img3');
            $imageName3 = uniqid('product_image_') . '.' . $image3->getClientOriginalExtension();
            $image3->storeAs('public/product_images', $imageName3);
            $product->foto3 = $imageName3;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        
        // Delete the product's images from storage
        if ($product->foto1) {
            \Storage::delete('public/product_images/' . $product->foto1);
        }
        if ($product->foto2) {
            \Storage::delete('public/product_images/' . $product->foto2);
        }
        if ($product->foto3) {
            \Storage::delete('public/product_images/' . $product->foto3);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
