<?php
$camisa = "";
if (isset($_POST['quemado'])) {
    if ($_POST['quemado'] == "no") {
        $camisa = " Como primer paso debes quitar el bombillo quemado.</br>";
        $camisa .= "Luego, Intercambias el bombillo quemado por el nuevo bombillo</br>";
        $camisa .= "Por ultimo, puedes comproprobar que el bombillo funcione correctamente</br>";
        $camisa .= "...</br>...";
    } else {
        $quemado = "el bombillo funciona bien. No necesita hacer nada.";
    }
}
?>
