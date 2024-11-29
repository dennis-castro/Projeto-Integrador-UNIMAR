<h1>cadastro</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label >Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Data</label>
        <input type="date" name="data_agendamento" class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Horas</label>
        <input type="time" name="horas" class="form-control" required>
    </div>
    <div class="mb-3">
        <label >Descrição</label>
        <input type="text" name="descricao" class="form-control" >
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</form>