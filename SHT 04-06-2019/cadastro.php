<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$ddd = $_POST['area_code'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
	$repSenha = $_POST['senha2'];
if ($senha === $repSenha) {

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Erro de conexão:" .$conn->connect_error);
	}

	$sql = "INSERT INTO dadosUsuarios (codigo,nome, sobrenome, cpf, email, ddd, telefone, senha, repSenha) VALUES (0,'$nome', '$sobrenome', $cpf, '$email', $ddd, $telefone, '$senha', '$repSenha')";

	if ($conn->query($sql) === TRUE) {
		echo "Dado Incluido filha da puta";
}else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}else{
	 // <script language = 'javascript' type='text/javascript'>alert('Coloque as duas senhas iguais.').window.location.href = 'cadastro.html';</script>
	echo "<script>alert('teste').window.location.href = 'cadastro.html';</script>";
	

}
?>
