<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Destino form</h1>
  </div>

  <?php require 'conexao.php';

  $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
  $pop = filter_input(INPUT_POST, "pop", FILTER_SANITIZE_SPECIAL_CHARS);
  $continente = filter_input(INPUT_POST, "continente", FILTER_SANITIZE_SPECIAL_CHARS);
  $bandeiraURL = filter_input(INPUT_POST, "bandeira", FILTER_SANITIZE_URL);

  echo "<p><b>Nome:</b> $nome</p>";
  echo "<p><b>População:</b> $pop</p>";
  echo "<p><b>Continente:</b> $continente</p>";
  echo "<p><b>URL:</b> $bandeiraURL</p>";

  $sql = "UPDATE paises SET nome = ?, bandeira = ?, continente = ?, populacao = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$nome, $bandeiraURL, $continente, $pop, $id]);


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