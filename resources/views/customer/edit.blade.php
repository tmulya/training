 <form method="POST" action="/customer/{{ $customer->id }}" accept-charset="UTF-8">
 	<input name="_method" type="hidden" value="PATCH">
 	{{ csrf_field() }}
	<label>Name</label>
	<input type="text" name="name" value="{{ $customer->name }}">
	<label>Address</label>
	<input type="text" name="address" value="{{ $customer->address }}">
	<label>Email</label>
	<input type="text" name="email" value="{{ $customer->email }}">
	<label>Phone</label>
	<input type="text" name="phone" value="{{ $customer->phone }}">
	<button type="submit">Save</button>
</form>