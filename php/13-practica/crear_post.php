<?php require_once 'includes/header.php' ?>


	<div class="card">
					
		<h2> Nuevo Post </h2>

		<form action="guardar_post.php" method="POST">
			
			<label for="titulo">Titulo: </label>
			<input type="text" name="titulo">

			<label for="categoria"> Categoría: </label>
			<select name="categoria">

				<?php 
					$categorias = ObtenerCategorias($db);
					if (!empty($categorias)):
						while($categoria = mysqli_fetch_assoc($categorias)):
				?>

				<option value="<?= $categoria['Id'] ?>">
					<?= $categoria['Nombre'] ?>					
				</option>
				
				<?php
						endwhile; 
					endif; 
				?>

			</select>
			
			<label for="contenido">Contenido:</label>
			<textarea name="contenido"></textarea>

			<label for="imagen">Imagen: </label>
			<input type="text" name="imagen">

			<input type="submit" value="Guardar">

		</form>			
		
	</div>
		
</div>
			<!-- FIN DE CONTENIDO -->
<?php require_once 'includes/rightside.php' ?>

<?php require_once 'includes/footer.php' ?>

