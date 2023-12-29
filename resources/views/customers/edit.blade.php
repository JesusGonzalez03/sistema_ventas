<div style="margin-bottom: 1em;">
    <a href="{{ route('customers.index') }}">Customer List</a>
</div>

<h1>Edit Customer</h1>

@if(session('message'))
    <div style="color: green;">{{ session('message') }}</div>
@endif

<form action="{{ route('customers.edit', $customer) }}" method="post">
    @csrf
    <div style="margin-bottom: 1em;">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter name" value="{{ $customer->name }}">
        @error('name')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" placeholder="Enter lastname" value="{{ $customer->lastname }}">
        @error('lastname')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="">Document</label>
        <input type="text" name="document" id="document" placeholder="Enter document" value="{{ $customer->document }}">
        @error('document')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter address" value="{{ $customer->address }}">
        @error('address')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="name">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter phone" value="{{ $customer->phone }}">
        @error('phone')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div style="margin-bottom: 1em;">
        <label for="city_id">City</label>
        <select name="city_id" id="city_id">
            <option value="">Select</option>
            @foreach($cities as $city)
                <option
                    @if ($city->id ===(int)$customer->city_id)
                        selected
                    @endif
                    value="{{ $city->id  }}">{{ $city->name }}</option>
            @endforeach
        </select>
        @error('city_id')
        <div style="color: red;">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
