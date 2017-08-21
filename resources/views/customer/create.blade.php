 <form method="POST" action="/customer" accept-charset="UTF-8">
 	{{ csrf_field() }}
	<label>Name</label>
	<input type="text" name="name">
	<label>Address</label>
	<input type="text" name="address">
	<label>Email</label>
	<input type="text" name="email">
	<label>Phone</label>
	<input type="text" name="phone">
	<button type="submit">Save</button>
</form>