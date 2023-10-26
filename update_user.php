<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuarios WHERE id = " . $_REQUEST['id'];

    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3"> 
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->nome; ?>" class="form=control">
    </div>
    <div class="mb-3"> 
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form=control">
    </div>
    <div class="mb-3"> 
        <label>Senha</label>
        <input type="password" name="password" class="form=control" required>
    </div>
    <div class="mb-3"> 
        <label>Data de Nascimento</label>
        <input type="date" name="date_birth" value="<?php print $row->data_nasc; ?>" class="form=control">
    </div>
    <div class="mb-3"> 
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
