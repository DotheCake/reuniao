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
<div class="col row justify-content-center ">
    <div class="col-8 border rounded pt-3 p-5 bg-light bg-opacity-75">
    <h2>Editar Reunião Sala <?=$sala;?></h2>
    <br>
    <form method="post" action="atualizar.php?id=<?=$id?>" enctype="multipart/form-data">
        <select name="sala" id="salas" class="form-select">
            <option>Selecione uma sala</option>
    
            <option value="1" <?php if ($sala == '1'){echo "selected";}?>>1</option>
            <option value="2" <?php if ($sala == '2'){echo "selected";}?>>2</option>
            <option value="3" <?php if ($sala == '3'){echo "selected";}?>>3</option>
        </select>
        <br>
        <input type="date" name="data" class="form-date" value="<?=$data?>">
        <input type="time" name="hora" class="form-time" value="<?=$hora?>">
        <br> <br>
        <input type="Text" name="descricao" class="form-control" value="<?=$descricao?>"> 
        <br> <br>
        <button class="btn btn-dark" type="submit"> 
            Salvar Edições
        </button>
    </form>
    </div>
</div>
<?php 
mysqli_close($conexao);
include "rodape.php"; 
?>