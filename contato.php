<?php
date_default_timezone_set("America/Sao_Paulo");

function limparEntrada($dado) {
  $dado = trim($dado);
  $dado = stripslashes($dado);
  $dado = htmlspecialchars($dado);
  return $dado;
}

$erros = [];
$nome = "";
$email = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nome = limparEntrada($_POST["nome"] ?? "");
  $email = limparEntrada($_POST["email"] ?? "");
  $mensagem = limparEntrada($_POST["mensagem"] ?? "");

  if (strlen($nome) < 3) {
    $erros[] = "O nome precisa ter pelo menos 3 caracteres.";
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erros[] = "O e-mail informado não é válido.";
  }

  if (strlen($mensagem) < 10) {
    $erros[] = "A mensagem precisa ter pelo menos 10 caracteres.";
  }

  if (empty($erros)) {
    $data = date("d/m/Y H:i:s");

    $conteudo = "=============================\n";
    $conteudo .= "Nova mensagem recebida\n";
    $conteudo .= "Data: $data\n";
    $conteudo .= "Nome: $nome\n";
    $conteudo .= "E-mail: $email\n";
    $conteudo .= "Mensagem: $mensagem\n";
    $conteudo .= "=============================\n\n";

    file_put_contents("mensagens.txt", $conteudo, FILE_APPEND);
  }
} else {
  $erros[] = "Acesso inválido. Volte ao formulário e envie uma mensagem.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Contato enviado</title>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #fff8f2;
      color: #25324b;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .message-box {
      width: 100%;
      max-width: 600px;
      background-color: #ffffff;
      padding: 35px;
      border-radius: 18px;
      box-shadow: 0 10px 35px rgba(37, 50, 75, 0.12);
      text-align: center;
      border-top: 8px solid #ff7a59;
    }

    h1 {
      margin-bottom: 15px;
    }

    p {
      line-height: 1.6;
      margin-bottom: 12px;
    }

    .success {
      color: #3ab7a5;
      font-weight: bold;
    }

    .error {
      color: #ff7a59;
      font-weight: bold;
    }

    ul {
      text-align: left;
      margin: 20px 0;
    }

    a {
      display: inline-block;
      margin-top: 20px;
      background: linear-gradient(90deg, #ff7a59, #3ab7a5);
      color: #ffffff;
      text-decoration: none;
      padding: 12px 22px;
      border-radius: 30px;
      font-weight: bold;
    }

    a:hover {
      opacity: 0.9;
    }
  </style>
</head>

<body>
  <div class="message-box">

  <?php if (empty($erros)): ?>

<h1>Mensagem enviada!</h1>

<p class="success">
  Obrigada pelo contato, <?php echo $nome; ?>.
</p>

<p>
  Sua mensagem foi registrada com sucesso.
</p>

<p>
  Em breve entrarei em contato pelo e-mail informado.
</p>

<?php else: ?>

      <h1>Ops! Algo deu errado.</h1>

      <p class="error">
        Não foi possível processar sua mensagem.
      </p>

      <ul>
        <?php foreach ($erros as $erro): ?>
          <li><?php echo $erro; ?></li>
        <?php endforeach; ?>
      </ul>

    <?php endif; ?>

    <a href="index.html">Voltar ao currículo</a>
  </div>
</body>
</html>