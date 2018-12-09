<?php 

$id_muni = $_POST['id_muni'];

require '../config/config_db.php';
$link = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die('No se pudo conectar: ' . mysql_error());
$sql = "SELECT * FROM tparroquias WHERE id_municipio =".$id_muni;
$query = mysqli_query($link,$sql);
$html= "<option value='0'>Seleccionar ciudad</option>";
while ($row = mysqli_fetch_array($query)) {
    $html.= "<option value='".$row['id_parroquia']."'>".$row['parroquia']."</option>";       

}
echo $html;

?>