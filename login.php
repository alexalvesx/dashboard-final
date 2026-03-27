<!DOCTYPE html>
<html LANG="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="dashboard-container">

        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user"></i> Login </h2>

                </div>

                <form action="valida_login.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Email</label>
                        <input type="text" id="email" name="email" placeholder="admin@blog.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" name="senha" placeholder="Ex: 123456" required>
                        </div>
                    </div>

                    <div class="form-action">
                        <button type="submit" class="btn-save"><i class="fa-solid fa-circle-check"></i> Entrar </button>
                        <a href="#" class="btn-cancel"> Cancelar </a>
                    </div>

                </form>
            </section>
        </main>
    </div>
</body>

</html>