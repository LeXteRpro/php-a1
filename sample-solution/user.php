<html>
<body>

<form method="post" action="save_user.php">
<div>
	<label>First Name</label>
	<input name="first_name" />
</div>
<div>
	<label>Last Name</label>
	<input name="last_name" />
</div>
<div>
	<label>Password</label>
	<input name="password" type="password" />
</div>
<div>
	<label>Confirm Password</label>
	<input name="confirm_password" type="password" />
</div>
<div>
	<label>Email</label>
	<input name="email" />
</div>
<div>
	<label>City</label>
	<input name="city" />
</div>
<div>
	<label>Province</label>
	<select name="province">
		<option value="ab">ab</option><option value="bc">bc</option><option value="on">on</option><option value="qc">qc</option><option value="sk">sk</option>	</select>
</div>
<input type="submit" value="Save" />

</form>
</body>
</html>