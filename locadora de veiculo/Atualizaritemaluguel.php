
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
      <a href="cadastroitemaluguel.php">Cadastrar</a>
      <a href=" pesquisaritemaluguel.php">listar</a><a href="excluiritemaluguel.php">excluir</a>
       <a href="Atualizaritemaluguel.php">atualizar</a><br>
</section>
  <h1>atualizar</h1>
                <hr><br><br>  
<form method="post" class="Formulario">

    <input type="text" placeholder="itemaluguel" name="itemaluguel" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idaluguel" name="idaluguel" size="20" maxlength="10" required><br>
    <input type="text" placeholder="idveiculo" name="idveiculo" size="20" maxlength="10" required><br>

    <input type="submit" name="Executar" value="Atualizar">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["itemaluguel"])) {
        $itemaluguel = $_POST["itemaluguel"];
        $idaluguel = $_POST["idaluguel"];
        $idveiculo = $_POST["idveiculo"];


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conex�o com o Banco");
        }
        else {
            $sql = "UPDATE itemaluguel set idveiculo = '$idveiculo', idaluguel = '$idaluguel' where itemaluguel = $itemaluguel";
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
