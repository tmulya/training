<table>
	<thead>
		<th>Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Action</th>
	</thead>
	<tbody>
		@foreach ($customer as $c)
			<tr>
				<td>{{ $c->name }}</td>
				<td>{{ $c->address }}</td>
				<td>{{ $c->phone }}</td>
				<td>{{ $c->email }}</td>
				<td>
					<a href="/customer/{{ $c->id }}/edit">Edit</a>
					<form method="POST" action="/customer/{{ $c->id }}" accept-charset="UTF-8">
 						<input name="_method" type="hidden" value="DELETE">
 						{{ csrf_field() }}
 						<button type="submit">Delete</button>
 					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>