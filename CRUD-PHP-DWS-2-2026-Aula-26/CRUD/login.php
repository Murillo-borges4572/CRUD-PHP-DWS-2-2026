<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Destino Formulário de Autenticação</h1>
  </div>

  <?php require 'conexao.php';

  $email = $_SESSION["email"];

  echo "<p><b>Email:</b> $email</p>";

  if ($result == true) {
    echo "<div class='alert alert-success' role='alert'>
  <h3>País alterado com sucesso!</h3>
</div>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>
  <h3>Falha na alteração do País!</h3>
  <p><?= $stmt->error; ?></p>
</div>";
  };
  ?>
</main>
</div>
</div>

<?php require "footer.php"; ?>