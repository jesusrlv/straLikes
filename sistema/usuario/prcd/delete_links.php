<?php    
include('../query/qc.php');

$id = $_POST['id'];

$sql_delete = "DELETE FROM documentos WHERE id = '$id'";
$resultado_delete = $conn -> query($sql_delete);
 if($resultado_delete){
    echo json_encode(array
    (
        'success' => 1
    ));
 }else{
    echo json_encode(array
    (
        'success' => 0,
        'error' => $conn->error
    ));
 }

 ?>