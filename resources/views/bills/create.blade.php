<div style="margin-bottom: 1em;">
    <a href="{{ route('bills.index') }}">bills list</a>
</div>

<h1>Create bills</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('bills.create')  }}" method="post">
    @csrf
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
        <label for="total">Total</label>
        <input type="number" name="total" id="total" placeholder="Enter Total">
        @error('total')
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
        <label for="employee_id">Employee</label>
        <select name="employee_id" id="employee_id">
            <option value="">Select</option>
            @foreach($employees as $employee)
                <option
                    @if ($employee->id === (int)old('$employee_id'))
                        selected
                    @endif
                    value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        @error('employee_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
