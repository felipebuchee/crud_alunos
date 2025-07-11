<?php 

    require_once(__DIR__ . "/../../controller/AlunoController.php");

    $alunoCont = new AlunoController();

    $lista = $alunoCont->listar();

    //print_r($lista);

    include_once __DIR__ . '/../include/header.php';
?>

Listagem de alunos

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Estrangeiro</th>
        <th>Curso</th>
        <th></th>
        <th></th>
    </tr>

    <?php foreach ($lista as $aluno) : ?>
        <tr>
            <td><?= $aluno->getId() ?></td>
            <td><?= $aluno->getNome() ?></td>
            <td><?= $aluno->getIdade() ?></td>
            <td><?= $aluno->getEstrangeiro() ? 'Sim' : 'Não' ?></td>
            <td><?= $aluno->getCurso()->getId() ?></td>
            <td></td>
            <td></td>
        </tr>
    <?php endforeach; ?>
</table>



<?php
    include_once __DIR__ . '/../include/footer.php';
?>

