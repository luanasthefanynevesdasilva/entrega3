<?php
include_once("conexao.php");






?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>excluir aluguel</title>
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
      <a href="Cadastroaluguel.php">Cadastrar</a>
      <a href="pesquisaluguel.php">listar</a><a href="excluiraluguel.php">excluir</a>
       <a href="Atualizaraluguel.php">atualizar</a><br>
</section>

                <h1>excluir</h1>
                <hr><br><br>  
                
         <form method="post" class="Formulario" action="#">
    <br>
    <br>

    <input type="text" placeholder="Codigo do aluguel" name="idaluguel" class="txtcodigo" required><br>
    <input type="submit" name="Executar" value="Excluir">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";

    if(isset($_POST["idaluguel"])) {
        $idaluguel = $_POST["idaluguel"];

        $conn = new mysqli($servername, $username, $password, $dbname);
        echo"<br><br>";

        if ($conn->connect_error) {
            die("Erro na conexão com o Banco");
        }
        else {
            $sql = "delete from aluguel WHERE  idaluguel = $idaluguel";

            if ($conn->query($sql) === TRUE) {
                echo "<span><b>Aviso:</b>aluguel excluido com sucesso!</span>";
            } else {
                echo "<span><b>Aviso:</b>Erro ao excluir, verifique Código</span>";
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
