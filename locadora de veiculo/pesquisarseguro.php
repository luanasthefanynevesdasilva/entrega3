<?php
include_once "conexao.php";

 ?>



<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">


      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="Index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastrofuncionario.php"><li>funcionario</li></a>
            <a href="cadastroseguro.php"><li>seguro</li></a>
            <a href="cadastroveiculo.php"><li>veiculo</li></a>
            <a href="cadastroaluguel.php"><li>aluguel</li></a>
            <a href="cadastrodevolucao.php"><li>devolucao</li></a>
            <a href="cadastroitemaluguel.php"><li>itemaluguel</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
         <a href="Cadastroseguro.php">Cadastrar</a> <a href=" pesquisarseguro.php">lista</a><a href="excluirseguro.php">excluir</a><a href="Atualizarseguro.php">atualizar</a><br>
</section>
         <br><br>
            

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por Clientes">
        <input type="submit" value="Buscar">
    </form>

                
				
<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";
    

     $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexao: " . $conn->connect_error);
    }
    else {

        if(isset($_POST["pr"]))
        {
            $dado = $_POST["pr"];

            if(!$dado == "")
                $sql = 'Select * from seguro where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from seguro";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from seguro where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from seguro";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >vaor</th>
        <th >datainicio</th>
        <th >datafinal</th>
 

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $valor = $row['valor'];
                $datafinal = $row['datafinal'];
                $datainicio = $row['datainicio'];



                echo " <tr>";
               
                echo "<td>" . $valor . "</td>";
                echo "<td>" . $datafinal . "</td>";
                echo "<td>" . $datainicio . "</td>";


                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum seguro encontrado!!..</h2>";
        }
        $conn->close();
    }
    ?>
</table>

</section>
<footer>

</footer>
</body>
</html>
