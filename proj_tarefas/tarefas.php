<?php session_start(); /* inicio da sessão */ ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/estilos.css">
    <title>tarefas</title>
</head>
<body>
    <h1>Gerenciador de tarefas</h1>


    <!--Criação do formulario-->
    <form>
        <fieldset>
            <legend> Nova Tarefa </legend>
            <label> tarefa:
                <input type= "text" name= "nome">
            </label>
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>


    <?php

        /* se existir a caixinha do formulario com o nome -nome */
        if(isset($_GET['nome'])) {
            if($_GET['nome']=='fim'){ /* verdade */
                session_destroy(); /* destruir session */
            }
            else { /* falso continua sessão */
               $_SESSION['lista_tarefas'][] = $_GET['nome']; 
            }
        }

        // definição da variavel vetorial arranjos ou vetor
        $lista_tarefas=array();
       
       // if(isset($_GET['nome'])){
         //   $_SESSION ['lista_tarefas'][]=$_GET['nome'] /*VETOR DENTRO DA SESSION */ ;
            //echo "Nome da Tarefa :".$_GET['nome'];
       // }

        if(isset ($_SESSION['lista_tarefas'])){ 
            $lista_tarefas=$_SESSION
            ['lista_tarefas'];
        } // fim if(isset($_GET['nome']))

        $lista_tarefas;


    ?>
        <table>
            <tr>
                <th>  Tarefas </th>
            </tr>
            <?php foreach($lista_tarefas as $tarefa) : 
                /* estrutura de repetição para manipular o vetor */ ?>
            <tr>
                <td><?php echo $tarefa; ?></td>
            </tr>
            <?php endforeach; /* fim da estrutura de repetição */ ?>
            </table>


</body>
</html>