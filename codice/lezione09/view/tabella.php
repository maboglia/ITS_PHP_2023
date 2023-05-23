<?php include_once '../controller/SerieController.php';?>

<?php  $ctrl = new SerieController();
        $elenco = $ctrl->findAll();
?>


<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Rating</th>
                <th scope="col">Lingua</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($elenco as $serieTV): ?>
            <tr class="">
                <td><?= $serieTV->titolo ?></td>
                <td><?= $serieTV->rating ?></td>
                <td><?= $serieTV->language ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
