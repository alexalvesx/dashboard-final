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

    <script>
    // 1.Pergunta ao usurário e guarda a resposta na variável
    let categorias = prompt("Quantas categorias você deseja cadastrar?");
    let nomeCategoria
    

    // 2. Converte o texto que o usuário digitou para um número real
    let quantidade = Number(categorias);

    // 3.Cria um laço de repetição que roda a quantidade de vezes informada
    for (let i = 1; i <= quantidade; i++){
        nomeCategoria = prompt("Digite o nome da categoria "+i);
        // Mostra o progresso apenas no F12 (Console)
        if (nomeCategoria == ""){
            console.log("Erro: O nome da categoria não pode ser vazio!");
        } else {
            console.log("Categoria "+nomeCategoria+" cadastrada com sucesso!");
        }
    }

    alert("Finalizado!");

    </script>

</body>

</html>