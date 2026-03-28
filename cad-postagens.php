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
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Postagem </h2>
                    <p>Preencha os dados abaixo da postagem.</p>
                </div>

                <form action="insere-usuario.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" id="titulo" name="titulo" placeholder="Ex: Um novo dia" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Conteúdo</label>
                        <input type="text" id="conteudo" name="conteudo" placeholder=" Ensolarado com poucas nuvens..." required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Categoria</label>
                            <input type="categoria" id="categoria" name="categoria" required>
                        </div>

                        <div class="form-group flex-1">
                            <label for="status">Status</label>
                            <select id="status" name="status">
                                <option value="1">Ativo</option>
                                <option value="2">Inativo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn-save"><i class="fa-solid fa-floppy-disk"></i> Finalizar Cadastro</button>
                        <a href="postagens.php" class="btn-cancel">Cancelar</a>
                    </div>

                </form>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>