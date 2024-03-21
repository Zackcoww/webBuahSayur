<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
  
    public function index()
    {
        $customers = Customers::all();
        return view('customer.index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers',
            'password' => 'required|string|min:2',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
        ]);

        $customer = new Customers();
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->password = bcrypt($validatedData['password']);
        $customer->phone = $validatedData['phone'];
        $customer->address = $validatedData['address'];
        $customer->address2 = $validatedData['address2'];
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Customer created successfully!');
    }

    public function edit($id)
    {
        $customer = Customers::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,'.$id,
            'password' => 'required|string|min:2',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
        ]);

        $customer = Customers::findOrFail($id);
        $customer->name = $validatedData['name'];
        $customer->email = $validatedData['email'];
        $customer->password = bcrypt($validatedData['password']);
        $customer->phone = $validatedData['phone'];
        $customer->address = $validatedData['address'];
        $customer->address2 = $validatedData['address2'];
        $customer->save();

        return redirect()->route('customer.index')->with('success', 'Customer updated successfully!');
    }



    public function show(string $id)
    {
        //
    }

    public function destroy($id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully!');
    }
}
