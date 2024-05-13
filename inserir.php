<?php include "cabecalho.php"; ?>
<div class="col row justify-content-center ">
    <div class="col-8 border rounded pt-3 p-5 bg-light bg-opacity-75">
        <h2>Cadastrar Nova Reunião</h2>
        <br>
        <form method="post" action="salvar.php" enctype="multipart/form-data">
            <select name="sala" id="salas" class="form-select">
                <option selected>Selecione uma sala</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br>
            <input type="date" name="data" class="form-date">
            <input type="time" name="hora" class="form-time">
            <br><br>
            <input type="Text" name="descricao" class="form-control" placeholder="Descrição"> 
            <br> <br>
            <button class="btn btn-dark" type="submit"> 
                Salvar Reunião
            </button>
        </form>
    </div>
</div>
<?php include "rodape.php"; ?>