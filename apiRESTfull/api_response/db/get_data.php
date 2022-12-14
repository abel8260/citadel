<?php
require './conexao.php';
session_start();
$inv_id = $_GET["gdata"];



$result_usuarios= $pdo-> prepare( "SELECT * FROM card  WHERE id_card = '$inv_id'");
$result_usuarios-> execute();
$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {





$_SESSION["page_src"] = $row_usuario['page_src'];
$_SESSION["img_src"] = $row_usuario['img_src'];
$_SESSION["nome"] = $row_usuario['nome_setor'];
$_SESSION["tipo"] = $row_usuario['tipo'];



}
var_dump($_SESSION["page_src"]);
var_dump($_SESSION["img_src"]);
var_dump($_SESSION["nome"]);
var_dump($_SESSION["tipo"]);
header("location: ../index.php");

?>