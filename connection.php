<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'Suzy@2601');
define( 'DB', 'canalti');

$connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');

?>