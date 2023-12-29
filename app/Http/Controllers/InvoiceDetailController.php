<?php

namespace App\Http\Controllers;

use App\Models\Invoice_detail;
use App\Models\Bill;
use  App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoiceDetailController extends Controller
{
    public function index()
    {
        return view('invoice_details.index',[
            'invoice_details' => Invoice_detail::paginate(10)
        ]);
    }

    public function create()
    {
        $bills = Bill::orderBy('id')->get();
        $customers = Customer::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        return view('invoice_details.create', compact('bills', 'customers', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'bill_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'product_id' => 'required|integer',
            'amount' => 'required|max:255',

        ]);

        Invoice_detail::create($data);

        return back()->with('message', 'Invoice detail.');
    }

    public function edit(Invoice_detail $invoice_detail)
    {
        $bills = Bill::orderBy('id')->get();
        $customers = Customer::orderBy('name')->get();
        $products = Product::orderBy('name')->get();
        return view('invoice_details.edit', compact('invoice_detail','bills', 'customers', 'products'));
    }

    public function update(Invoice_detail $invoice_detail, Request $request)
    {
        $data = $request->validate([
            'bill_id' => 'required|integer',
            'customer_id' => 'required|integer',
            'product_id' => 'required|integer',
            'amount' => 'required|max:255',

        ]);

        $invoice_detail->update($data);

        return back()->with('message', 'invoice_detail updated.');
    }

    public function destroy(Invoice_detail $invoice_detail)
    {
        $invoice_detail->delete();
        return back()->with('message', 'invoice detail deleted.');
    }
}
