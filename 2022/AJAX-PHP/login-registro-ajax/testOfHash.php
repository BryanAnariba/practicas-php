<?php
// Ver el ejemplo de password_hash() para ver de dónde viene este hash.
$hash = '$2y$10$J/3lZ4JCN.Vnr3SwgVfUB.QsitKs8cdEhONKv4';

if (password_verify('asd456', $hash)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}
?>