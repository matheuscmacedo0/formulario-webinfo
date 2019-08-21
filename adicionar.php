<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Cliente </h3>
		<form action="php_action/create.php" method="POST">
			<div class="input-field col s12">
				<input type="text" name="nome" id="nome">
				<label for="nome">Nome</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="url_site" id="url_site">
				<label for="url_site">URL Site</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="url_admin" id="url_admin">
				<label for="url_admin">URL Admin</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="user_admin" id="user_admin">
				<label for="user_admin">User Admin</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="pass_admin" id="pass_admin">
				<label for="pass_admin">Password Admin</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="url_ftp" id="url_ftp">
				<label for="url_ftp">URL FTP</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="user_ftp" id="user_ftp">
				<label for="user_ftp">User FTP</label>
			</div>
			<div class="input-field col s12">
				<input type="text" name="pass_ftp" id="pass_ftp">
				<label for="pass_ftp">Password FTP</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green"> Lista de clientes </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
