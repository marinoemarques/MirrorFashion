
	<?php 
		$cabecalho_title = "Mirror Fashion";
		include 'cabecalho.php'; 
	?>
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">

	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section>
		<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a></li>
						<ul id="interno">
							<li><a href="#">Manga curta</a></li>
							<li><a href="#">Manga comprida</a></li>
							<li><a href="#">Camisa social</a></li>
							<li><a href="#">Camisa casual</a></li>
						</ul>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>
		<img src="img/destaque-home.jpg" alt="Promoção: Big City Night" class="destaque img">
		<a href="#" class="pause"></a>
	</div>
	<div class="container paineis">
		<section class="painel novidades">
			<h2>Novidades</h2>
				<ol>
					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>Rocker T-Shirt R$29,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura4.png">
								<figcaption>Abrigo Waterproof R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura9.png">
								<figcaption>Camisa Lenhadora R$59,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura15.png">
								<figcaption>Vestido Tropical R$49,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura10.png">
								<figcaption>Blusa Europa R$39,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura14.png">
								<figcaption>Camisa WorkIt R$49,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar mais</button>
		</section>
		<section class="painel mais-vendidos">
			<h2>Nossos Mais Vendidos</h2>
				<ol>
					<li>
						<a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png">
								<figcaption>Rocker T-Shirt R$29,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura4.png">
								<figcaption>Abrigo Waterproof R$129,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura9.png">
								<figcaption>Camisa Lenhadora R$59,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura15.png">
								<figcaption>Vestido Tropical R$49,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura10.png">
								<figcaption>Blusa Europa R$39,90</figcaption>
							</figure>
						</a>
					</li>
					<li>
						<a href="produto.html">
							<figure>
								<img src="img/produtos/miniatura14.png">
								<figcaption>Camisa WorkIt R$49,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				<button type="button">Mostrar mais</button>
		</section>
	</div>
	<?php include ("rodape.php"); ?>
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<script src="js/less.js"></script>
 </body>
 </html>

