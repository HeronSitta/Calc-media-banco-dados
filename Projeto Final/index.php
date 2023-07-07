<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1, maximum-scale=1.0">
	
	<title>SISTEMA DE NOTAS</title>
	<style type="text/css">
		
		*{
			margin: 0;
			border: 0;
			padding: 0;
		}
			
			head{
				
				width: 100%;

			}


		h1{font-family: arial;
			color: rgba(0,191,255,1.8);
			text-align: center;
			background-color: rgb(0,0,0);
			font-size: 3.8rem;
			padding: 50px;
			font-style: italic;
			text-shadow: 1.3px 1.3px 2.8px white;
		}
			

		h3{
			font-family: arial;
			font-size: 2.4rem;
			margin-left: 2%;
			font-style: italic;
		}
		p{
			font-family: arial;
			font-size: 3rem;
			font-style: italic;
			font-weight: bold;
		}


		body{
			background-color:#4169E1;
		}
		footer{font-family: arial;
			text-align: center;
			background-color: #000;
			color: rgb(0,191,255);
			padding: 10px;
			margin:20px
			padding-top:5px;
			padding-bottom:5px;
			font-size: 2.4rem;
			text-shadow: 1.3px 1.3px 2.8px white;
		}
		input{font-family: arial;
			border: solid #000;
			border-radius: 10px;
			background-color: #DCDCDC;
			padding: 8px;
			text-align: center;
			font-style: italic;

		}
		.dados {
			margin-left: 3%;
			font-size: 1.8rem;
		}
		html {
			font-size: 62.5%;
		}
		label {
			font-size: 2.8rem;
			font-family: arial;
			font-weight: bold;

		}
		button{
			border-radius: 10px;
			background-color: rgba(0,250,154);
			margin: 10px;
			padding: 0.3%;
			border: solid black;  
		}
		p{
			margin-left: 20px;
			font-size: 2.4rem;
			color: rgba(50,205,50);
		}
		



	</style>



</head>

<body>


	
	<h1>SISTEMA DE NOTAS</h1><br><br>

	

	<h3>Caro Professor(a) ou Aluno(a), coloque nos espaços abaixo as notas. (de 0 a 10).</h3><br><br>
	<section class="dados">
		 
		<form method="POST"> 
			<label for="Nome">Nome:</label><br>
			<input type="text" id="nome" name="nome" placeholder="Insira seu nome"><br><br>

			<label for="notas">Nota 1:</label><br>
			<input type="number" id="nota1" name="nota1" placeholder="Insira suas notas"><br><br>
			
			<label for="notas">Nota 2:</label><br>
			<input type="number" id="nota2" name="nota2" placeholder="Insira suas notas"><br><br>
			
			<label for="notas">Nota 3:</label><br>
			<input type="number" id="nota3" name="nota3" placeholder="Insira suas notas"><br><br>
			
			<label for="notas">Nota 4:</label><br>
			<input type="number" id="nota4" name="nota4" placeholder="Insira suas notas"><br><br>
			
			<label for="notas">Nota 5:</label><br>
			<input type="number" id="nota5" name="nota5"placeholder="Insira suas notas"><br><br>
			
			<input id ="calcular" type="button" onclick="Media()" value="Calcular Média"><br><br>
			
			<p>Média final:</p>
			<input type="text" id="media" name="media"><br>
			<br>
			<p>Enviar</p>
			<input id ="enviar" type="submit" value="Enviar"><br><br>
			
			
			

			<script type="text/javascript">
				
			

				function Media(){

					let nota1 = parseFloat(document.getElementById('nota1').value);
					let nota2 = parseFloat(document.getElementById('nota2').value);
					let nota3 = parseFloat(document.getElementById('nota3').value);
					let nota4 = parseFloat(document.getElementById('nota4').value);
					let nota5 = parseFloat(document.getElementById('nota5').value);
					let media = (nota1 + nota2 + nota3 + nota4 + nota5) / 5;
					document.getElementById("media").value = media.toFixed(2);	}


			</script>
			
		</form>
		<?php 
		$hostname = "localhost";
          $username = "root";
          $password = "1234";
          $dbname = "calc_media_proj";

          $conn = mysqli_connect($hostname, $username, $password) or die("html>script language='JavaScript'>alert('Unable to connect to the database! Please try again later.'),history.go(-1)/script>/html>");
          mysqli_select_db($conn, $dbname);

          if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        echo "Conexão bem-sucedida" . "<br/>"; 

		$MEDIA = $_POST['media'];
		$NOME = $_POST['nome'];
		$NOTA_1 = $_POST['nota1'];
		$NOTA_2 = $_POST['nota2'];
		$NOTA_3 = $_POST['nota3'];
		$NOTA_4 = $_POST['nota4'];
		$NOTA_5 = $_POST['nota5'];
		
		$sql = "INSERT INTO aluno (IDALUNO, NOME, NOTA_1, NOTA_2, NOTA_3, NOTA_4, NOTA_5, MEDIA) VALUES (NULL,'$NOME', '$NOTA_1', '$NOTA_2', '$NOTA_3', '$NOTA_4', ' $NOTA_5', '$MEDIA')";
		
		
		if ($conn->query($sql) === true) {
            echo "Dados inseridos com sucesso <br/>";
        } else {
            echo "Erro ao inserir dados: " . $conn->error;
        }
        
          $conn->close();
		?>

	</div>

	</section>
	
<br>
<br>
<br>


	<footer>
		<h2>Contato</h2> <br>
		Email: heronchs@gmail.com <br><br>
		Telefone: (49)999992188 <br><br>
		Projeto ZUCCHETTI


	</footer>


</body>
</html>