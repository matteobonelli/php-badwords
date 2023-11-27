<?php
$testo = $_GET['testo'];
$censoredWord = $_GET['censored'];

$censoredSentence = str_replace($censoredWord, "***", $testo);
$sentenceLength = strlen($testo);
$censoredLength = strlen($censoredSentence);

$sentenceWords = str_word_count($testo, 0);
$notCensoredWords = str_word_count($censoredSentence, 0);
?>

<p>
    <?php echo "$testo </br> lunghezza testo:  $sentenceLength <br> parole nella frase:  $sentenceWords " ?>
</p>
<p>
    <?php echo "$censoredSentence </br> lunghezza testo:  $censoredLength </br> parole nella frase:  $notCensoredWords" ?>
</p>