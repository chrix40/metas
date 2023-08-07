<?php
function realizarLogin($cpf, $senha) {
    // Verifica se o login e senha são iguais a "admin"
    if ($cpf === '123.456.789-00' && $senha === '123456') {
        // Redireciona para a página desejada
        header('Location: index.php');
        exit; // Certifique-se de terminar a execução após o redirecionamento
    } else {
        // Caso as credenciais estejam erradas, você pode retornar uma mensagem de erro, exibir na página ou fazer qualquer outra ação desejada.
        echo 'Credenciais inválidas. Tente novamente!';
    }
}

// Verifica se o formulário foi submetido e chama a função de login
if (isset($_POST['submit'])) {
    // Obtém os valores do formulário
    $cpf = $_POST['cpf'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Realiza o login
    realizarLogin($cpf, $senha);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$title ?? 'Metas';?></title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="/metas/assets/css/custom.css">
    </head>
    <style>
    #errorMessage {
        text-transform: uppercase;
        display: inherit;
        opacity: 0;
        transition: opacity 5s ease; /* Transição de 0.5 segundos com aceleração suave */
    }

    .esqueci-senha{
        color: #fff;
        font-size: 14px;
        font-family: Roboto, sans-serif;
        overflow: hidden;
        text-decoration: none !important;
    }
    a{
        text-decoration: none !important;
    }
    .lembrar-me-div{
        background-color: transparent;
        border: none !important;
        padding-left: 0px !important;
    }
    .lembrar-me{
        color: #fff;
    }
</style>
    <body class="container-fluid pt-3">
    
    <div class="row container">
        <div class="col-12 col-md-12">
            <section>
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-8 col-lg-3 login-box">
                        <h2>Metas</h2>
                        <form method="post" action="login.php"> <!-- Substitua 'login.php' pelo nome do arquivo PHP que processa o login -->
                            <div class="user-box form-group">
                                <input type="text" name="cpf" required oninput="mascara(this)">
                                <label class="text">CPF</label>
                            </div>
                            <div class="user-box form-group">
                                <input type="password" name="senha" required>
                                <label class="text">Senha</label>
                            </div>
                            <div class="input-group mb-3">
                                <label class="lembrar-me-div input-group-text d-flex align-content-center justify-content-center align-items-center">
                                    <input class="form-check-input mt-0" type="checkbox" value="">
                                    <span class="m-0 ms-2 lembrar-me">Lembrar-me</span>
                                </label>
                            </div>
                            <!-- Restante dos campos do formulário, se houver -->
                            <div class="submit-button d-flex justify-content-center">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <button type="submit" name="submit" class="text-entrar w-100 h-100" value="Login">Entrar</button>
                            </div>   
                        </form>
                        <div class="w-100 mt-4 d-flex justify-content-center align-items-center">
                            <a href="registrar.php" id="register-link" class="text-right"> <!-- Substitua 'esqueciMinhaSenha.php' pelo nome do arquivo PHP que trata a recuperação de senha -->
                                <p class="text-muted esqueci-senha d-flex justify-content-center">
                                    Não tem conta ainda? registre-se <i class="ms-2 bi bi-box-arrow-in-right"></i>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<script>
    function mascara(i) {

        var v = i.value;

        if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length - 1);
            return;
        }

        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>