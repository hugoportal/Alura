<?php
$nome = 'campo" /> <script>alert("teste");</script>';

$depoimento = filter_input(
        INPUT_POST,
    'Texto do depoimento <script> alert("teste");</script>',
    FILTER_SANITIZE_STRING);

?>
<input type="text" name="<?php echo addslashes($nome) ?>" />
<input type="text" name="<?php echo htmlentities($nome) ?>" />
<input type="text" name="<?php echo htmlspecialchars($nome) ?>" />
<input type="text" name="<?php echo $depoimento ?>" />



