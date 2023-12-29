<div><a href="/">Home</a></div>
<a href="{{ route('invoice_details.create') }}">New Invoice details</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellspacing="10" cellpadding="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Bill</td>
        <td>Customer</td>
        <td>Product</td>
        <td>Amount</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($invoice_details as $key => $invoice_detail)
        <tr>
            <td>{{ $invoice_details->firstItem() + $key }}</td>
            <td>{{ $invoice_detail->bill->id }}</td>
            <td>{{ $invoice_detail->customer->name }}</td>
            <td>{{ $invoice_detail->product->name }}</td>
            <td>{{ $invoice_detail->amount }}</td>

            <td>{{ $invoice_detail->created_at->format('F D, Y') }}</td>
            <td>
                <a href="{{ route('invoice_details.edit', $invoice_detail) }}">Edit</a>

                <form action="{{ route('invoice_details.delete', $invoice_detail) }}" method="post">
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
