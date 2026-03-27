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
            <section class="container-card">
                <article>
                    <h2>Módulo de Usuários</h2>
                    <p>Gerencie os acessos e permissões do sistema nesta área.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Relatórios de Vendas</h2>
                    <p>Acompanhe os gráficos de desempenho deste mês.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
                <article>
                    <h2>Configurações do servidor</h2>
                    <p>Ajuste as portas do Apache e o banco de dados.</p>
                    <a href="#" class="btn">Acessar</a>
                </article>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>