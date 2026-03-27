<!DOCTYPE html>
<html LANG="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Novo Usuário </h2>
                    <p>Preencha os dados abaixo para registrar um novo acesso.</p>
                </div>

                <form action="insere-usuario.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="e-mail" id="email" name="email" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" required>
                        </div>

                        <div class="form-group flex-1">
                            <label for="nivel">Nível</label>
                            <select id="nivel" name="nivel">
                                <option value="1">Usuário</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn-save"><i class="fa-solid fa-floppy-disk"></i> Finalizar Cadastro</button>
                        <a href="usuarios.php" class="btn-cancel">Cancelar</a>
                    </div>

                </form>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>