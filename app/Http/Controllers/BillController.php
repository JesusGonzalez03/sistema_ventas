<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Employee;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('bills.index', [
            'bills' => Bill::paginate(10)
        ]);
    }

    public function create()
    {
        $products = Product::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $employees = Employee::orderBy('name')->get();
        return view('bills.create', compact( 'products','customers', 'employees'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'total' => 'required|max:255',
            'product_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'employee_id' => 'required|integer',
        ]);

        Bill::create($data);

        return back()->with('message', 'Bill created');
    }

    public function edit(Bill $bill)
    {
        $products = Product::orderBy('name')->get();
        $customers = Customer::orderBy('name')->get();
        $employees = Employee::orderBy('name')->get();
        return view('bills.edit', compact('bill','products', 'customers', 'employees'));
    }

    public function update(Bill $bill, Request $request)
    {
        $data = $request->validate([
            'total' => 'required|max:255',
            'product_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'employee_id' => 'required|integer',
        ]);

        $bill->update($data);

        return back()->with('message', 'Bill update.');
    }

    public function destroy(Bill $bill)
    {
        $bill->delete();
        return back()->with('message', 'Bill deleted');
    }
}
