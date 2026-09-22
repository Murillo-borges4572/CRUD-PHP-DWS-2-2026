<?php require "header.php"; 

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if(empty($id)){
  echo "<div class='alert alert-danger' role='alert'>
  <h3>Falha ao abrir o formulario para edição.</h3>
  <p>ID do pais está vazio.</p>
</div>";
exit;
}

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Alteração</h1>
  </div>
  <br>
  <p class="display-4">
    Esta é a página de<strong>Alteração</strong>.
  </p>

  <?php
  require_once "conexao.php";

  $sql = "SELECT `nome`, `bandeira`, `continente`, `populacao` FROM `paises` WHERE id = (?)";
  $stmt = $conn->prepare($sql);
  $result = $stmt->execute([$id]);

  $rowPais = $stmt->fetch();
  
  ?>

  <form class="row g-3" method="POST" action="destinoForm.php">

    <div class="col-md-2">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="<?= $rowPais["nome"] ?>">
    </div>


    <div class="col-md-1">
      <label for="pop" class="form-label">População</label>
      <input type="num" class="form-control" id="pop" name="pop" value="<?= $rowPais["populacao"] ?>">
    </div>

    <div class="col-md-2">
      <label for="continente" class="form-label">Continente</label>
      <input type="text" class="form-control" id="continente" name="continente" value="<?= $rowPais["continente"] ?>">
    </div>

    <div class="col-6">
      <label for="bandeira" class="form-label">Bandeira</label>
      <input type="url" class="form-control" id="bandeira" name="bandeira" value="<?= $rowPais["bandeira"] ?>">
    </div>

    <div class="col-td-6">
      <button type="submit" class="btn btn-primary">Alterar</button>
      <button type="reset" class="btn btn-warning">Cancelar</button>
    </div>


  </form>
</main>
</div>
</div>


<?php require "footer.php"; ?>