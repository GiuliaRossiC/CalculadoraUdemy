<?php

if(isset($_POST['nome']) && empty($_POST['nome'])){
	echo 'preencha o nome completo<br />';
}
if(isset($_POST['cpf']) && empty($_POST['cpf'])){
	echo '<br />preencha o cpf';

if(is_numeric($_POST['cpf']) && isset($_POST['cpf'])){
	echo '<br />preencha numero<br>';
}

?>
<form method="post" action="">
	<label>
		Nome completo*:
		<input type="text" name="nome">
	</label>

	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

	<input type="submit" name="cadastrar">
</form>

