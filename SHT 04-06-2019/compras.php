<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$estado = $_POST['estado'];
	$endereco = $_POST['endereco'];
	$codigo = $_POST['codigo'];
	$acompanhamento = $_POST['acompanhamento'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$boleto = $_POST['boleto'];
	$concluir = $_POST['enviar'];

	if ($concluir == $boleto) {
		echo "<a href='boleto.html'>";
	}
 ?>

</body>
</html>

 foma de pagamento igual a boleto encaminhar para o boleto bancario