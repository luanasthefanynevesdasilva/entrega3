
<?php
include_once("conexao.php");






?>
<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>atualizar devolucao</title>

      
      
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
  <h1>atualizar</h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="iddevolu�ao" name="iddevolu�ao" size="20" maxlength="10" required><br>
    <input type="text" placeholder="avaria" name="avaria" size="40" maxlength="43" required><br>
    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="20" required><b>
    <input type="date" placeholder="datadevolucao" name="datadevolucao" size="20" maxlength="20" required><b>
    <input type="text" placeholder="combustiveldevolucao" name="combustiveldevolucao" size="20" maxlength="20" required><b>
    <input type="text" placeholder="extra" name="extra" size="20" maxlength="20" required><b>
    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["iddevolu�ao"])) {
        $iddevolu�ao = $_POST["iddevolu�ao"];
        $avaria = $_POST["avaria"];
        $idaluguel = $_POST["idaluguel"];
        $datadevolucao = $_POST["datadevolucao"];
        $extra = $_POST["extra"];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conex�o com o Banco");
        }
        else {
            $sql = "UPDATE devolucao set avaria = '$avaria', idaluguel = '$idaluguel',datadevolucao = '$datadevolucao',extra = '$extra' where iddevolucao = $iddevolucao";
            echo"<br><br>";
            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>Dados Atulizados com Sucesso</span>";
            } else {
                echo "<span><b>Aviso:</b> Erro ao atualizar, verifique os dados!<span>" . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
    }
    ?>
</form>


<footer>

</footer>
</body>
</html>
