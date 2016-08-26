<br>
<br>
<h2>Categorías</h2>
<br>
<br>
<p style="text-align:center;"><a href="<?php echo APP_URL; ?>categories/add">Agregar una gategoría</a></p>
<center>
<table border="1">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Action</th>	
		
	</tr>
<?php foreach ($categories as $category ): ?>
    <tr>
		<td><?php echo $category['id']; ?></td>
		<td><?php echo $category['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>
</center>


