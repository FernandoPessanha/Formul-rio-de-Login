<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boas vindas</title>
		<style>
        {
            box-sizing: border-box;
        }

        body{
            background-image: url(tech.jpg);
            background-color: rgb(242, 161, 245);
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 40px;
            color: #FFFFFF;

        }
    	</style>
	<head/>
	<body>
		<?php
			$nome = $_POST["nome"];
			$senha = $_POST["senha"];
			if ($nome == null || $senha == null) {
				echo "Login e senha não foram preenchidos corretamente";
			} else {
				echo "Bem Vindo $nome";
			
			}
		?>
	<body/>
<html/>