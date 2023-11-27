<?php
$testo = $_GET['testo'];
$censoredWord = $_GET['censored'];

$censoredSentece = str_replace($censoredWord, "***", $testo);
$sentenceLength = strlen($testo);
$censoredLength = strlen($censoredSentence);
?>

<p>
    <?php echo "$testo $sentenceLength" ?>
</p>
<p>
    <?php echo "$censoredSentece $censoredLength" ?>
</p>