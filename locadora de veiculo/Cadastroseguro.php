<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar seguro</title>

      
      
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
  <h1>cadastro</h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaseguro.php">


                    data-inicio<br>
                    <input type="date" name="datainicio" class="campo" maxlength="40" required autofocus><br>
                    data-final<br>
                    <input type="date" name="datafinal" class="campo" maxlength="40" required autofocus><br>
    				valor<br>
                    <input type="text" name="valor" class="campo" maxlength="40" required autofocus><br>


                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

