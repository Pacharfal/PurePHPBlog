<?php
$navigace = 'prispevky';
require_once('vkladane/zahlavi.php');
?>

<a href="<?php echo $this->zaklad->url . 'prispevek.php?akce=pridej'; ?>" class="btn btn-primary brn-sm">
    <span class="glyphicon glyphicon-plus"></span>
    Přidat příspěvek
</a>

<table class="table table-striped">
    <thead>
    <tr>
        <td>Nadpis příspěvku</td>
        <td>Obsah příspěvku</td>
        <td>Akce</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($prispevky as $prispevek): ?>
        <tr>
            <td>
                <h3><?php echo implode(' ', array_slice(explode(' ',
                        strip_tags($prispevek['obsah'])), 0, 10)); ?>[...]</h3>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('vkladane/zapati.php') ?>
