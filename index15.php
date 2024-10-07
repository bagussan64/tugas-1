. <?php
$hari = array("Senin", "Selasa");
array_unshift($hari,"Minggu");
array_push($hari,"Rabu");
foreach($hari as $hari){
echo $hari.'<br/>';
}
?>
