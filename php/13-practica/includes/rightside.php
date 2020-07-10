<!-- INICIO DE SIDEBAR DERECHO -->
			<div class="rightcolumn">
				<div class="card">
					<h2>Sobre mí</h2>	

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>

				</div>
				
				<div class="card">
					<h2>Categorías</h2>	

					<div class="menu">
						<a href="#">Categoría 1</a>
						<a href="#">Categoría 2</a>
						<a href="#">Categoría 3</a>
						<a href="#">Categoría 4</a>
					</div>					

				</div>
				
				<!-- USUARIO -->
				
				<div class="card">
					<?php /*var_dump($_SESSION['usuario']);*/ ?>
					<?php if(isset($_SESSION['usuario'])): ?>

					<h2>Bienvenido <?= $_SESSION['usuario']['Nombres']. ' ' . $_SESSION['usuario']['Apellidos'] ?></h2>	
					
					<?php else: ?>

					<h2>Usuario</h2>	
					
					<form action="login.php" method="post">
						<label for="email">Correo</label>
						<input type="email" name="email">
						<label for="password">Contraseña</label>
						<input type="password" name="password">
						
						<input type="submit" value="Iniciar Sesion">

					</form>

					<?php endif; ?>

					
					 
					
					<?php if(isset($_SESSION['usuario'])): ?>

						<div class="menu">
							<a href="#">Nuevo Post</a>
							<a href="cerrar.php">Cerrar Sesión</a>
						</div>					
					
					<?php endif; ?>
				</div>

			</div>
			<!-- FIN DE SIDEBAR DERECHO -->
		</div>
		<!-- FIN DE FILA PRINCIPAL -->