<?php 
include "cabecalho.php"; 
include "conexao.php";
$id = $_GET['id'];
$sala = "sala";
$data = "data";
$hora = "hora";
$descricao = "descricao";

$sql = "select * from tb_reunioes where id = $id";
$resultado = mysqli_query($conexao,$sql);
while ($umareuniao = mysqli_fetch_assoc($resultado)):
    $sala = $umareuniao['sala'];
    $data = $umareuniao['data'];
    $hora = $umareuniao['hora'];
    $descricao = $umareuniao ['descricao'];
endwhile;
?>
    <h2>Editar Reunião <?=$id;?></h2>
    <form method="post" action="atualizar.php?id=<?=$id?>" enctype="multipart/form-data">
        <select name="sala" id="salas" class="form-select">
            <option selected>Selecione uma sala</option>
            <option value="1" <?php if ($tipo == '1'){echo "selected";}?>>1</option>
            <option value="2" <?php if ($tipo == '2'){echo "selected";}?>>2</option>
            <option value="3" <?php if ($tipo == '3'){echo "selected";}?>>3</option>
        </select>
        <br>
        <input type="date" name="data" class="form-date" value="<?=$data?>">
        <input type="time" name="hora" class="" value="<?=$hora?>">
        <br> <br>
        <input type="Text" name="descricao" class="form-control" value="<?=$descricao?>"> 
        <br> <br>
        <button class="btn btn-primary" type="submit"> 
            Salvar Pokemon
        </button>
    </form>
<?php 
mysqli_close($conexao);
include "rodape.php"; 
?>