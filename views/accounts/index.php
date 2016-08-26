
<br>
<br>
<h2>Listado de cuentas</h2>

<br>
<br>

<p style="text-align:center;"><a href="<?php echo APP_URL; ?>accounts/add">Agregar una cuenta</a></p>

<center>

<table border="1">
	<tr>
		<th>Id</th>
		<th>User_id</th>	
		<th>Name</th>
		<th>Action</th>
	</tr>
<?php foreach ($accounts as $account ): ?>
    <tr>
		<td><?php echo $account['id']; ?></td>
		<td><?php echo $account['user_id']; ?></td>	
		<td><?php echo $account['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>

</center>