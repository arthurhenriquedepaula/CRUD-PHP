<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="action" value="insert">
    <div for="name" class="mb-3"> 
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    <div class="mb-3"> 
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="mb-3"> 
        <label for='password'>Senha</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="mb-3"> 
        <label for="date_birth">Data de Nascimento</label>
        <input type="date" id="date_birth" name="date_birth" class="form-control">
    </div>
    <div class="mb-3"> 
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>


