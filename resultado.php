<?php

	require 'autoload.php';

	$usuario = New \nivelamento\teste\Usuario($_POST['nome'], $_POST['genero']);
	$contato = New \nivelamento\teste\Contato($_POST['email'], $_POST['endereco'], $_POST['cep'], $_POST['telefone']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" width="device-width initial-scale-1.0">
	<link rel="shortcut icon" href="img/cosvi.png" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<title>Resultado</title>
</head>
<body>
	<div align="center">
		<img src="img/cosvib.png" alt="logo CVE">
	</div>
	<br><div id="faixa">
			<p><strong>Resultado do teste de nivelamento de <?php echo $usuario->getNome() ." ". $usuario->getSobrenome(); ?></strong></p>
	</div>
	<div id="container">

		<p><?php echo $usuario->getTratamento();?>, segue abaixo suas informações e o resultado do seu teste:</p>
		<ul>
			<li><strong>Nome:</strong> <?php echo $usuario->getNome(); ?></li>
			<li><strong>Sobrenome:</strong> <?php echo $usuario->getSobrenome(); ?></li>
			<li><strong>Usuário:</strong> <?php echo $contato->getUsuario(); ?></li>
			<li><strong>Gênero:</strong> <?php echo $usuario->getGenero(); ?></li>
			<li><strong>Endereço:</strong> <?php echo $contato->getEndereco(); ?></li>
			<li><strong>E-mail:</strong> <?php echo $contato->getEmail(); ?></li>
			<li><strong>Telefone:</strong> <?php echo $contato-> getTelefone();?> </li>
		</ul>
	</div>
<?php

	error_reporting(0);

	$respostaA = "a";
	$respostaB="b";
	$respostaC="c";
 
	$res1 = $_POST['questao01'];
	$res2 = $_POST['questao02'];
	$res3 = $_POST['questao03'];
	$res4 = $_POST['questao04'];
	$res5 = $_POST['questao05'];
	$res6 = $_POST['questao06'];
	$res7 = $_POST['questao07'];
	$res8 = $_POST['questao08'];
	$res9 = $_POST['questao09'];
	$res10 = $_POST['questao10'];
	$res11 = $_POST['questao11'];
	$res12 = $_POST['questao12'];
	$res13 = $_POST['questao13'];
	$res14 = $_POST['questao14'];
	$res15 = $_POST['questao15'];
	$res16 = $_POST['questao16'];
	$res17 = $_POST['questao17'];
	$res18 = $_POST['questao18'];
	$res19 = $_POST['questao19'];
	$res20 = $_POST['questao20'];
	$res21 = $_POST['questao21'];
	$res22 = $_POST['questao22'];
	$res23 = $_POST['questao23'];
	$res24 = $_POST['questao24'];
	$res25 = $_POST['questao25'];	

	$acertou= 0;
	$errou= 0;

	/*$porcetagem = ;*/


	if($res1 === $respostaB ){
		$acertou++;
	}else {
		$errou++;
	}


	if($res2 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}

	if($res3 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}


	if($res4 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}


	if($res5 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}


	if($res6 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}


	if($res7 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}


	if($res8 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}


	if($res9 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	if($res10 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}


	if($res11 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}


	if($res12 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}


	if($res13 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}


	if($res14 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}

	if($res15 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	
	if($res16 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	if($res17 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}


	if($res18 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}


	if($res19 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}

	
	if($res20 === $respostaA){
		$acertou++;
	}else{
		$errou++;
	}

	if($res21 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	if($res22 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	if($res23 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}

	if($res24 === $respostaC){
		$acertou++;
	}else{
		$errou++;
	}

	if($res25 === $respostaB){
		$acertou++;
	}else{
		$errou++;
	}

	$total = $acertou + $errou;
	$porcentagem = ($acertou/$total)*100;
?>
		<div id="faixa">
				<strong><?php echo "Você acertou $acertou questões" . "<br>" . "Você errou $errou questões"; ?></strong><br>
				<p>O teste possui um total de <strong><?php echo $total ?></strong> questões. Isso sgnifica que você teve sucesso em <strong><?php echo $porcentagem ?>%</strong>. Faça um screenshot desta tela, e mostre para o seu(sua) professor(a).</p>
		</div><br>
		<div align="center">
			<a href="index.php"><button class="button">Voltar</button></a>
		</div>
	</body>
</html>