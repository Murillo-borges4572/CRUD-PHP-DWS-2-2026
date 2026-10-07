<?php require "header.php"; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><strong>Listagem</strong></h1>
    </div>
    <br>
    <p class="display-4">
        Esta é a página da <strong>"LISTAGEM"</strong>.
    </p>

    <?php require 'conexao.php';

    $sql = "SELECT `id`, `nome`, `bandeira`, `continente`, `populacao` FROM `paises` ORDER BY nome";
    $stmt = $conn->query($sql);

    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">População</th>
                <th scope="col">Continente</th>
                <th scope="col">Bandeira</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $stmt->fetch()) {
            ?>
                <tr>
                    <th scope='row'><?= $row["id"] ?></th>
                    <td><?= $row["nome"] ?></td>
                    <td><?= $row["populacao"] ?></td>
                    <td><?= $row["continente"] ?></td>
                    <td><a target="_self"" href="<?= $row["bandeira"] ?>">Link Bandeira</a></td>
                    <td><a target="_self" class="btn btn-warning" href="alterar.php?id=<?= $row["id"] ?>">Alterar</a></td>
                    <td><a target="_self" class="btn btn-danger" href="excluir.php?id=<?= $row["id"] ?>">Excluir</a></td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</main>
</div>
</div>
<?php require "footer.php"; ?>