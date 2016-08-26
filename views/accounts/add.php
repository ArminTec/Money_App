<h2>Agregar cuenta</h2>

<form action="<?php echo APP_URL; ?>accounts/add" method="POST">
<p><label for="name">Tipo de cuenta: </label>
<input type="text" name="name"></p>
<p>
<p><label for="name">Usuario: </label>	
<select name="user_id" >
	 <?php 
	 foreach ($users as $user): ?>
       <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
	 	<?php endforeach; ?>
</select></p>

<p><input type="submit" value="Save"></p>

</form>	