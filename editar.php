<h1>Editar Usuario</h1>
<?php
    $sql = "SELECT * FROM usuario WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label >Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Data</label>
        <input type="date" name="data_agendamento" value="<?php print $row->data_agendamento; ?>class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Horas</label>
        <input type="time" name="horas" value="<?php print $row->horas; ?>class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Descrição</label>
        <input type="text" name="descricao" value="<?php print $row->descricao; ?>class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>