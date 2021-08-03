<h2>Form</h2>
<form method="post" action="FormSubmit" >
	{{@csrf_field()}}

	<table>
		<tr>
			<td>
				Name:<input type="text" name="name"/>
			</td>
			<br/>
			@error('name')
			{{$message}}
			@enderror
			
		</tr>

       <tr>
			<td>
				Email:<input type="text" name="email"/>
			</td>
			<br/>
			@error('email')
			{{$message}}
			@enderror
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>