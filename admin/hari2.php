<?php
$hari=date('w');
	switch ($hari) {
		case 0 : {
			$hari='Minggu';}
			break;

		case 1 : {
			$hari='Minggu';}
			break;

		case 2 : {
			$hari='Minggu';}
			break;

		case 3 : {
			$hari='Minggu';}
			break;

		case 4 : {
			$hari='Minggu';}
			break;

		case 5 : {
			$hari='Minggu';}
			break;

		case 6 : {
			$hari='Minggu';}
			break;
		
		default:{
			$hari='nama hari tdk diketahui';}
			break;
	}

?>

<?php
/*
function hari_indo($hari){
$tanggal = substr($tgl,8,2);
$bulan   = getBulan(substr($tgl,5,2));
$tahun   = substr($tgl,0,4);
return $tanggal.' '.$bulan.' '.$tahun;
}
function getBulan($bln){
switch ($bln){
case 1:
return "Minggu";
break;
case 2:
return "Senin";
break;
case 3:
return "Selasa";
break;
case 4:
return "Rabu";
break;
case 5:
return "Kamis";
break;
case 6:
return "Jumat";
break;
case 7:
return "Sabtu";
break;
case 8:
return "Minggu";
break;
}
}
*/
?>