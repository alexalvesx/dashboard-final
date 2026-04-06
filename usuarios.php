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
                <div class="header-title">
                    <h2>Gestão de Usuários</h2>
                    <p>Visualize e gerencie as permissões de usuário do sistema.</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Usuário</a>

            </div>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th class="acoes">Editar</th>
                        <th class="acoes">Excluir</th>
                        <th class="acoes">Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Alexsander Rodrigues</td>
                        <td>alex_alves.x@hotmail.com</td>
                        <td><?php
                        // Simulando o nível que viria do banco de dados
                        $nivelAcesso = 2;

                        if ($nivelAcesso == 2) {
                            // Se for 2, renderiza o HTML do Admin
                            echo '<span class="badge admin">Administrador</span>';
                        } else {
                            // Se for qualquer outro valor, renderiza o Usuário
                            echo '<span class="badge user">Usuário</span>';
                        } ?></td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Eric Freitas</td>
                        <td>eric@unifev.edu.br</td>
                        <td><?php
                        // Simulando o nível que viria do banco de dados
                        $nivelAcesso = 1;

                        if ($nivelAcesso == 1) {
                            // Se for 2, renderiza o HTML do Admin
                            echo '<span class="badge editor">Editor</span>';
                        } else {
                            // Se for qualquer outro valor, renderiza o Usuário
                            echo '<span class="badge user">Usuário</span>';
                        } ?></td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>John Lennon da Silva</td>
                        <td>john@outlook.com</td>
                        <td><?php
                        // Simulando o nível que viria do banco de dados
                        $nivelAcesso = 0;

                        if ($nivelAcesso == 2) {
                            // Se for 2, renderiza o HTML do Admin
                            echo '<span class="badge admin">Administrador</span>';
                        } else {
                            // Se for qualquer outro valor, renderiza o Usuário
                            echo '<span class="badge user">Usuário</span>';
                        } ?></td>
                        <td><span class="badge inativo">Inativo</span></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-pen"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-circle-xmark"></i></td>
                        <td class="acoes"><button class="btn-icon"><i class="fa-solid fa-file-lines"></i></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8" align="right">Informações da quantidade de registros... </td>
                    </tr>
                </tfoot>
            </table>

        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>