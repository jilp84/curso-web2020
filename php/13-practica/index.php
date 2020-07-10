<?php require_once 'includes/header.php' ?>

<?php 
	$noticias = ObtenerPosts($db);
	//var_dump($noticias);
	if(!empty($noticias)):
		while($noticia = mysqli_fetch_assoc($noticias)):
?>
	<div class="card">
					
		<h2> <?= $noticia['Titulo'] ?> </h2>

		<?php 
			$fecha = date_create($noticia['Fecha']);
		?>

		<h5>Publicado el <?= date_format($fecha, 'd-m-Y') ?> </h5>
					
		<div class="d_img">
			<img src="<?=$noticia['UrlImagen']?>" alt="Imagen">
		</div>
			
		<?=$noticia['Contenido']?>		
		

	</div>
<?php 
		endwhile;
	endif;
?>			
</div>
			<!-- FIN DE CONTENIDO -->
<?php require_once 'includes/rightside.php' ?>

<?php require_once 'includes/footer.php' ?>


