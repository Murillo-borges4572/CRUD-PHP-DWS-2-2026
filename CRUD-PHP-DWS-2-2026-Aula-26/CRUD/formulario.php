<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Formulário</h1>
  </div>
  <br>
  <p class="display-4">
    Esta é a página do <strong>"Formulário"</strong>.
  </p>
  <form class="row g-3" method="POST" action="destinoForm.php">

    <div class="col-md-2">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome">
    </div>


    <div class="col-md-1">
      <label for="pop" class="form-label">População</label>
      <input type="num" class="form-control" id="pop" name="pop">
    </div>

    <div class="col-md-2">
      <label for="continente" class="form-label">Continente</label>
      <input type="text" class="form-control" id="continente" name="continente">
    </div>

    <div class="col-6">
      <label for="bandeira" class="form-label">Bandeira</label>
      <input type="url" class="form-control" id="bandeira" name="bandeira">
    </div>

    <div class="col-td-6">
      <button type="submit" class="btn btn-primary">Gravar</button>
      <button type="reset" class="btn btn-primary">Cancelar</button>
    </div>


  </form>
</main>
</div>
</div>


<?php require "footer.php"; ?>