<div id="content">
<?php
foreach($_SESSION['mot']->getLettres() as $value) {
    if(in_array($value, $_SESSION['lettresJustes'])) {
        echo "<div class='lettre'>
                ".strtoupper($value)."
            </div>";
    } else {
        echo "<div class='lettre'>
            <p>-</p>
        </div>";
    }
}
?>
</div>
<div id="clavier">
<?php
$alphabet = str_split(strtolower("ABCDEFGHIJKLMNOPQRSTUVWXYZ"));
foreach($alphabet as $alphaLette) {
    echo "<a href='game.php?lettre=$alphaLette' class='letter-option'>".strtoupper($alphaLette)."</a>";
}
?>
</div>
<div id="lettresUtil">
    <p>Lettres utilisées : </p>
    <?php
    foreach($_SESSION['lettresUtilisees'] as $item) {
        if(in_array($item, $_SESSION['lettresJustes'])) {
            echo "<p class='used green'>".strtoupper($item)."</p>";
        } else {
            echo "<p class='used'>".strtoupper($item)."</p>";
        }
    }
    ?>
</div>