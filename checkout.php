 <!doctype html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Checkout Mirror Fashion</title>
     <meta name="viewport" content="width=device-width">
     <link rel="stylesheet" href="css/bootstrap.css">
 </head>
 <body>
	<div class="jumbotron">
		<div class="container">
    		<h1>Ótima escolha!</h1>
    		<p>Obrigado por comprar na Mirror Fashion!
				     Preencha seus dados para efetivar a compra.</p>
    	</div>
    </div>
    	<div class="container">
    		<div class="row">
    			<div class="col sm-4">
    		<div class="card">
    			<h2 class="card-header">Sua Compra</h2>
			<div class="card-body">
				<div class="card-text">
				<img src="img/produtos/foto3-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
					<dl>
						<dt>Produto</dt>
						<dd><?= $_POST['nome'] ?></dd>
						<dt>Preço</dt>
						<dd id="preco">R$ <?= $_POST["preco"] ?></dd>
						<dt>Cor</dt>
						<dd><?= $_POST['cor'] ?></dd>
						<dt>Tamanho</dt>
						<dd><?= $_POST['tamanho'] ?></dd>
					</dl>
					<div class="form-group">
						<label for="qt">Quantidade</label>
						<input type="number" id="qt" class="form-control" min="0" max="99" value="1">
					</div>
					<div class="form-group">
						<label for="total">Total</label>
						<output for="qt preco" id="total" class="form-control"><?= $_POST["preco"] ?>
						</output>
					</div>
				</div>
				</div>
			</div>
			</div>		
    	</div>
    		<form class="col sm-4">
    			<fieldset>
    				<legend>Dados Pessoais</legend>
    					<div class="form-group">
    						<label for="nome">Nome Completo</label>
    						<input type="text" class="form-control" id="nome" name="nome" autofocus required>
    					</div>
    					<div class="form-group">
    						<label for="email">E-mail</label>
    						<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
    					</div>
    						<div class="form-group">
    						<label for="nome">CPF</label>
    						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
    					</div>
    					<div class="checkbox">
    						<label>
    							<input type="checkbox" value="sim" name="spam" checked>Desejo receber spam da Mirror Fashion
    						</label>
    					</div>
    			</fieldset>
    			<fieldset>
    				<legend>Cartão de Crédito</legend>
    				<div class="form-group">
    						<label for="bandeira-cartao">Operadora</label>
    						<select name="bandeira-cartao" id="bandeira-cartao" class="form">
    							<option value="master">MasterCard</option>
    							<option value="visa">Visa</option>
    							<option value="amex">American Express</option>
    						</select>
    				</div>
    				<div class="form-group">
    						<label for="validade-cartao">Validade</label>
    						<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
    				</div>
    				
    			</fieldset>
    			<button type="submit" class="btn btn-primary btn-lg pull-right"><img src="glyph/glyphicons/glyphicons-344-thumbs-up.png"> Confirmar Pedido</button>
    		</form>	
    	</div>	
    	  	<style>
.navbar {
	margin: 0;
}
</style>
	<script src="js/jquery.js">	</script>
	<script src="js/checkout.js"></script>
	<script src="js/inputmask-plugin.js"></script>
 </body>
 </html>
