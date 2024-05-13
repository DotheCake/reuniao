<?php include "cabecalho.php"; ?>

<?php  include "conexao.php"?>
<div class="col row justify-content-center ">

    <div class="col-8 border rounded pt-3 p-5 bg-light bg-opacity-75">
        <h1 class="text-black">Reuniões Agendadas</h1>
        <table class="table mt-3 ">
            <thead>
                <tr>
                    <th>Sala</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Descrição</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "select * from tb_reunioes";
                $resultado = mysqli_query($conexao, $sql);
                while($umaReuniao = mysqli_fetch_assoc($resultado)):
                ?>
        
                <tr>
                    <td><?=$umaReuniao['sala'];?></td>
                    <td><?=$umaReuniao['data'];?></td>
                    <td><?=$umaReuniao['hora'];?></td>
                    <td><?=$umaReuniao['descricao'];?></td>
                    <td><a class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="editar.php?id=<?=$umaReuniao['id'];?>">Editar</a>
                    <a class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="excluir.php?id=<?=$umaReuniao['id'];?>">Excluir</a>
                    </td>
                </tr>
        <?php 
    endwhile;
    mysqli_close($conexao);
    ?>
            </tbody>
        </table>
        <div class="">
        <a href="inserir.php" class="btn btn-dark ">Cadastrar Nova Reunião</a>
        </div>
    </div> 

</div>  
    

<?php include "rodape.php" ?>