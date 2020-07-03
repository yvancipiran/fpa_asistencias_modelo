<?php

include("consulta.php");

session_start();

$nombre_usuario = $_POST['nombre_usuario'];
$clave = $_POST['clave'];

$consultas = new consulta;

$usuario_existe = $consultas->validar_usuario($nombre_usuario);
$clave_valida = $consultas->validad_clave($nombre_usuario, $clave);

if ($usuario_existe!="0" AND $clave_valida!="0") 
{
    $_SESSION['nombre_usuario'] = strtoupper($nombre_usuario);
    header("location:../principal.php");
} 
elseif($usuario_existe!="0" AND $clave_valida=="0")
{
    header("location:../clave_invalida.html");
}
else
{
    header("location:../usuario_invalido.html");
}



/*
if ($usuario_existe!="0")
{
    echo "El usuario existe";
    $clave_valida = $consultas->validad_clave($nombre_usuario, $clave);

    if ($clave_valida!="0")
    {
        header("location:../principal.php");
        $_SESSION['nombre_usuario'] = strtoupper($nombre_usuario);
    }
    else
    {
        header("location:../clave_invalida.html");
    }

}
else
{
    header("location:../usuario_invalido.html");

}

*/

?>