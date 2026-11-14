<h2>Senarai Pengguna</h2>

<a href="/admin/users/create">Tambah Pengguna</a>

<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Role</th>
</tr>

@foreach($users as $user)

<tr>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->role }}</td>
</tr>

@endforeach

</table>
