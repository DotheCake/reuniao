<?php include "cabecalho.php"; ?>
<h1>Reuniões Agendadas</h1>
<a href="inserir.php" class="btn btn-dark">Cadastrar Nova Reunião</a>
<?php  include "conexao.php"?>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Sala</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Descrição</th>
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
                <td><a href="editar.php?id=<?=$umaReuniao['id'];?>">Editar</a>
                <a href="excluir.php?id=<?=$umaReuniao['id'];?>">Excluir</a>
                </td>
            </tr>
        <?php 
    endwhile;
    mysqli_close($conexao);
    ?>
    </tbody>
</table>

<?php include "rodape.php" ?>