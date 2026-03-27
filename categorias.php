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
            <div class="header-content">
                <div class="header-contente">
                    <h2>Gestão de Categorias</h2>
                    <p>Visualize e gerencie as categorias.</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Categoria</a>

            </div>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Status</th>
                        <th class="acoes">Editar</th>
                        <th class="acoes">Excluir</th>
                        <th class="acoes">Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Categoria 1</td>
                        <td>Testando 1</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>Categoria 1</td>
                        <td>Testando 1</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>Categoria 1</td>
                        <td>Testando 1</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>