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
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Categoria </h2>
                    <p>Preencha os dados abaixo para registrar uma nova categoria.</p>
                </div>

                <form action="insere-usuario.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Notícias" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Status</label>
                        <input type="e-mail" id="status" name="status" placeholder="Ex: ativo" required>
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn-save"><i class="fa-solid fa-floppy-disk"></i> Finalizar Cadastro</button>
                        <a href="categorias.php" class="btn-cancel">Cancelar</a>
                    </div>

                </form>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>