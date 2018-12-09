<?php 

$id_estado = $_POST['id_estado'];

require '../config/config_db.php';
$link = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or die('No se pudo conectar: ' . mysql_error());
$sql = "SELECT * FROM tmunicipios WHERE id_estado =".$id_estado;
$query = mysqli_query($link,$sql);
$html= "<option value='0'>Seleccionar Municipio</option>";
while ($row = mysqli_fetch_array($query)) {
    $html.= "<option value='".$row['id_municipio']."'>".$row['municipio']."</option>";       

}
echo $html;

?>