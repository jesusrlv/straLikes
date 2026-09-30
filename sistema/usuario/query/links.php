<?php
 include('qc.php');

//  $id = $_POST['id'];
 $idUsr = $_POST['idU'];
 $idDoc = $_POST['idD'];

$sqlSocial = "SELECT * FROM documentos WHERE id_ext = '$idUsr' AND documento = '$idDoc' ORDER BY id ASC";
$resultadoSocial = $conn -> query($sqlSocial);
while($rowSocial = $resultadoSocial ->fetch_assoc()){
    echo'
    <li><a href="'.$rowSocial['link'].'" target="_blank">'.$rowSocial['link'].'</a> <button type="button" class="btn btn-sm btn-danger" onclick="deleteLink('.$rowSocial['id'].','.$idDoc.','.$idUsr.')"><i class="bi bi-trash"></i></button></li>
    ';
}