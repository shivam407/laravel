<h2>Form</h2>
<form method="post" action="formSubmit">
	{{@csrf_field()}}

	<input type="text" name="name">
	<input type="submit" name="submit">
	</form>