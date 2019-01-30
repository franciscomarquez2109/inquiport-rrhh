<?php 

require '../modelo/m_tablePrima.php'; //importamosla clase tabla prima
$objTablePrima = new class_tablePrima(); // creamos el objeto
$estatus = $_POST['estatus'];
$objTablePrima->selectTablePrima($sql = "SELECT numero,prima_semanal,prima_quincenal,prima_ejecutivo FROM ttabla_prima WHERE estatus = '$estatus'"); //realizamos consulta

while ($row = $objTablePrima->row()) {
    $html.= '<table class="table" id="tabla_prima">
    <thead>
      <th>N°</th>
      <th>Prima Semanal</th>
      <th>Prima Quincenal</th>
      <th>Prima Ejecutiva</th>
    </thead>
    <form>
    <tr>
      <td  class="col-xs-1">
        <input type="text" name="numero[]" id="nnumero" placeholder="N°" class="form-control name_list input-sm" value="'.$row['numero'].'" readOnly/>
      </td>
      <td>
        <input type="text" name="prima_semanal[]" id="prima_semanal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" value="'.number_format($row['prima_semanal'], 2, ',', '.').'"/>
      </td>
      <td>
        <input type="text" name="prima_quincenal[]" id="prima_quincenal" placeholder="000.000 Bs.S" class="form-control name_list input-sm" value="'.number_format($row['prima_quincenal'], 2, ',', '.').'"/>
      </td>
      <td>
        <input type="text" name="prima_ejecutivo[]" id="prima_ejecutivo" placeholder="000.000 Bs.S" class="form-control name_list input-sm" value="'.number_format($row['prima_ejecutivo'], 2, ',', '.').'"/>
      </td>
    </tr>
    
  </table>';
}

echo $html;
?>