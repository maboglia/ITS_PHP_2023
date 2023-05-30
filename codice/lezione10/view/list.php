<h1>elenco domande</h1>
<ul>
    <?php foreach($domande as $domanda): ?>
    <li><?= $domanda->testo ?></li>
    <?php endforeach; ?>
</ul>