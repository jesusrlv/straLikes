<?php
 include('qc.php');

//  $id = $_POST['id'];
 $idUsr = $_POST['idU'];
 $idDoc = $_POST['idD'];

$sqlSocial = "SELECT * FROM documentos WHERE id_ext = '$idUsr' AND documento = '$idDoc' ORDER BY id ASC";
$resultadoSocial = $conn -> query($sqlSocial);
echo'<ol>';
while($rowSocial = $resultadoSocial ->fetch_assoc()){
    echo'
    <li><i class="bi bi-link-45deg"></i> <a href="'.$rowSocial['link'].'" target="_blank">'.$rowSocial['link'].'</a> | <a href="#" onclick="deleteLink('.$idUsr.', '.$idDoc.','.$rowSocial['id'].')"><i class="bi bi-trash-fill text-danger"></i></a></li>
    ';
}
echo'</ol>';