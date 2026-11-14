<h2>Tambah Pengguna</h2>

<form method="POST" action="/admin/users/store">

@csrf

Name
<input type="text" name="name">

Email
<input type="email" name="email">

Password
<input type="password" name="password">

Role
<select name="role">
<option value="pegawai_tender">Pegawai Tender</option>
<option value="management">Management</option>
</select>

<button type="submit">Save</button>

</form>
