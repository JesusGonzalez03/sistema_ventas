<div><a href="/">Home</a></div>
<a href="{{ route('customers.create') }}">New Customer</a>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<table cellpadding="10" cellspacing="1" border="1">
    <thead>
    <tr>
        <td>No.</td>
        <td>Name</td>
        <td>lastname</td>
        <td>Document</td>
        <td>Address</td>
        <td>Phone</td>
        <td>City</td>
        <td>Timestamp</td>
        <td>Action</td>
    </tr>
    </thead>
    <tbody>
    @forelse($customers as $key => $customer)
        <tr>
            <td>{{ $customers->firstItem() + $key }}.</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->lastname }}</td>
            <td>{{ $customer->document }}</td>
            <td>{{ $customer->address }}</td>
            <td>{{ $customer->phone }}</td>
            <td>
                {{ $customer->city->name }}
            </td>
            <td>{{ $customer->created_at->format('F d, Y') }}</td>
            <td>
                <a href="{{ route('customers.edit', $customer) }}">Edit</a>

                <form action="{{ route('customers.delete', $customer) }}" method="post">
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
