<?php
$quemado = "";
if (isset($_POST['quemado'])) {
    if ($_POST['quemado'] == "no") {
        $quemado = " * Como primer paso debes quitar el bombillo quemado.</br>";
        $quemado .= " * Luego, Intercambias el bombillo quemado por el nuevo bombillo</br>";
        $quemado .= " * Por ultimo, puedes comproprobar que el bombillo funcione correctamente</br>";
        $quemado .= "</br>";
    } else {
        $quemado = "*El bombillo funciona. No necesitas cambiarlo.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar el Bombillo</title>
</head>
<body>
    <h1>¿El Bombillo esta funcionando?</h1>
    <form method="post"> 
        <button type="submit" name="quemado" value="si">si</button>
        <button type="submit" name="quemado" value="no">no</button>
    </form>
    <?php if ($quemado): ?>
        <h2>Resultado:</h2>
        <p><?php echo $quemado; ?></p>
    <?php endif; ?>
</body>
</html>