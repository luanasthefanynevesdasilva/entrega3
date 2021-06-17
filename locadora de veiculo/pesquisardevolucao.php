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
      <a href="cadastrodevolucao.php">Cadastrar</a>
      <a href=" pesquisardevolucao.php">listar</a><a href="excluirdevolucao.php">excluir</a>
       <a href="Atualizardevolucao.php">atualizar</a><br>
</section>
         <br><br>
            

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por devolucao">
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
                $sql = 'Select * from devolucao where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from devolucao";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from devolucao where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from devolucao";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >avaria</th>
        <th >idaluguel</th>
        <th >datadevolucao</th>
        <th >combustiveldevolucao</th>
        <th >extra</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                

                $avaria = $row['avaria'];
                $idaluguel = $row['idaluguel'];
                $datadevolucao = $row['datadevolucao'];
                $combustiveldevolucao = $row['combustiveldevolucao'];
                $extra = $row['extra'];

                echo " <tr>";
               
                echo "<td>" . $avaria . "</td>";
                echo "<td>" . $idaluguel . "</td>";
                echo "<td>" . $datadevolucao . "</td>";
                echo "<td>" . $combustiveldevolucao . "</td>";
                echo "<td>" . $extra . "</td>";

                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum devolucao encontrado!!..</h2>";
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
