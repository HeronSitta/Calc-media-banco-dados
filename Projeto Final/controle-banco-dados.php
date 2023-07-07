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

                        <script type="text/javascript">
    						
                            
                            function voltarInicio() {
                                window. history. back()
   												 }
															</script>

                         <button onclick="voltarInicio()">Voltar ao Início</button>
                                                        
