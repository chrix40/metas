<?php 
require_once('conexao.php');

$id = 0;
$descricao = '';
$situacao = 1;

if(isset($_POST['id'])){
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $celular = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$id){
        $stm = $con->prepare("INSERT INTO usuarios (nome,cpf,email,senha) VALUES (:nome,:cpf,:email,:senha)");
    } 
    $stm->bindValue(':nome', $nome);
    $stm->bindValue(':cpf', $cpf);
    $stm->bindValue(':email', $email);
    $stm->bindValue(':senha', $senha);
    $stm->execute();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? 'Registrar-se';?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/metas/assets/css/custom.css">
</head>
<body>
<section>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-8 col-lg-3 login-box">
            <h2>Registrar-se</h2>
            <?php if (!empty($errorMessage)): ?>
                <h5 class="errorMessage mt-2 mb-5 d-flex justify-content-center text-danger"><strong><?php echo $errorMessage; ?></strong></h5>
            <?php endif; ?>
            <form action="Login" method="post" class="mt-5">
                <div class="user-box form-group">
                    <input type="text" required name="nome" id="nome"  value="<?=$nome?>" autocomplete="off"> 
                    <label class="text">Nome</label>
                </div>
                <div class="user-box form-group">
                    <input type="text" required name="CPF" autocomplete="off" oninput="mascara(this)">
                    <label class="text">CPF</label>
                </div>
                <div class="user-box form-group">
                    <input type="text" required name="Email" autocomplete="off">
                    <label class="text">Email: </label>
                </div>
                <div class="user-box form-group">
                    <input type="text" required name="ConfirmarEmail" autocomplete="off">
                    <label class="text">Confirmar Email: </label>
                </div>
                <div class="user-box form-group">
                    <input type="password" name="Senha" required>
                    <label class="text">Senha</label>
                </div>
                <div class="submit-button d-flex justify-content-center">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button type="submit" name="submit" class="text-entrar w-100 h-100" value="Login">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</section>
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

</body>
</html>
