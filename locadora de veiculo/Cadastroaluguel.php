<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar aluguel</title>

      
      
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
      <a href="Cadastroaluguel.php">Cadastrar</a>
      <a href="pesquisaluguel.php">listar</a><a href="excluiraluguel.php">excluir</a>
       <a href="Atualizaraluguel.php">atualizar</a><br>
</section>
  <h1>cadastro</h1>
                <hr><br><br>  
<form id="cadcliente" method="post"  class="Formulario" action="processaaluguel.php">


                    datalocacao<br>
                    <input type="date" name="datalocacao" class="campo" maxlength="40" required autofocus><br>
                    idfuncionario<br>
                    <input type="text" name="idfuncionario" class="campo" maxlength="40" required autofocus><br>
    				combustivelatual<br>
                    <input type="text" name="combustivelatual" class="campo" maxlength="40" required autofocus><br>
                    desconto<br>
                    <input type="text" name="desconto" class="campo" maxlength="40" required autofocus><br>
                    troco<br>
                    <input type="text" name="troco" class="campo" maxlength="40" required autofocus><br>
                    total<br>
                    <input type="text" name="total" class="campo" maxlength="40" required autofocus><br>
                    pago<br>
                    <input type="text" name="pago" class="campo" maxlength="40" required autofocus><br>
                    diaria<br>
                    <input type="text" name="diaria" class="campo" maxlength="40" required autofocus><br>
                    idusuario<br>
                    <input type="text" name="idusuario" class="campo" maxlength="40" required autofocus><br>

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

