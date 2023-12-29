<div><a href="/">Home</a></div>
<a href="{{ route('bills.create') }}">New Bill</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellspacing="10" cellpadding="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Product</td>
        <td>Total</td>
        <td>Customer</td>
        <td>Employee</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($bills as $key => $bill)
        <tr>
            <td>{{ $bills->firstItem() + $key }}</td>
            <td>{{ $bill->product->name }}</td>
            <td>{{ $bill->total }}</td>
            <td>{{ $bill->customer->name }}</td>
            <td>{{ $bill->employee->name }}</td>

            <td>{{ $bill->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{ route('bills.edit', $bill) }}">Edit</a>

                <form action="{{ route('bills.delete', $bill) }}" method="post">
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No data found in table</td>
        </tr>
    @endforelse
    </tbody>
</table>
