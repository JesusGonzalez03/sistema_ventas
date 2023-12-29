<div style="margin-bottom: 1em;">
    <a href="{{ route('invoice_details.index') }}">Invoice details list</a>
</div>

<h1>Create InvoiceDetails</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('invoice_details.create')  }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="bill_id">Bill</label>
        <select name="bill_id" id="bill_id">
            <option value="">Select</option>
            @foreach($bills as $bill)
                <option
                    @if ($bill->id === (int)old('$bill_id'))
                        selected
                    @endif
                    value="{{ $bill->id }}">{{ $bill->id }}</option>
            @endforeach
        </select>
        @error('bill_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="customer_id">Customer</label>
        <select name="customer_id" id="customer_id">
            <option value="">Select</option>
            @foreach($customers as $customer)
                <option
                    @if ($customer->id === (int)old('$customer_id'))
                        selected
                    @endif
                    value="{{ $customer->id }}">{{ $customer->name }}</option>
            @endforeach
        </select>
        @error('customer_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="product_id">Product</label>
        <select name="product_id" id="product_id">
            <option value="">Select</option>
            @foreach($products as $product)
                <option
                    @if ($product->id=== (int)old('$product_id'))
                        selected
                    @endif
                    value="{{ $product->id }}">{{ $product->name }}</option>
            @endforeach
        </select>
        @error('product_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" placeholder="Enter amount" value="{{ old('amount') }}">
        @error('amount')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
