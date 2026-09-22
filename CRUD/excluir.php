<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Página de exclusão</h1>
  </div>

  <?php require 'conexao.php';

  $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_SPECIAL_CHARS);


  echo "<p><b>ID:</b> $id</p>";

  $sql = "DELETE FROM `paises` WHERE id = (?)";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$id]);


  if ($result === true) {
    echo "<div class='alert alert-success' role='alert'>
  <h3>País cadastrado com sucesso!</h3>
</div>";
  } else {
    echo "<div class='alert alert-danger' role='alert'>
  <h3>Registro excluido com sucesso!</h3>
  <p><?= $stmt->error; ?></p>
</div>";
  };
  ?>
  <p><a target="_blank" href="listagem.php">Voltar à listagem</a></p>
</main>
</div>
</div>

<?php require "footer.php"; ?>