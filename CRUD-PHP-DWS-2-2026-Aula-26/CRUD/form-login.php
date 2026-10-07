<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Formulário de Autenticação</h1>
  </div>
  <br>

  <form class="row g-3" method="POST" action="login.php">

    <div class="col-md-2">
      <input type="email" class="form-control" id="email" name="email" placeholder="Endereço de email">
    </div>

    <div class="col-md-1">
      <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
    </div>

    <div class="col-td-6">
      <button type="submit" class="btn btn-primary">Entrar</button>
    </div>


  </form>
</main>
</div>
</div>


<?php require "footer.php"; ?>