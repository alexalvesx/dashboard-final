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
                    <h2>Gestão de Postagens</h2>
                    <p>Visualize e gerencie as postagens.</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Postagem</a>
            </div>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th class="acoes">Editar</th>
                        <th class="acoes">Excluir</th>
                        <th class="acoes">Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>123456</td>
                        <td>Abra Kadabra</td>
                        <td>Cartola</td>
                        <td>Místico</td>

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