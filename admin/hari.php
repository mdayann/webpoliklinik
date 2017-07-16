<?php
function hari($mintahari){
date_default_timezone_set('Asia/Jakarta');
$mintahari=date("w");
$day[Monday]="Senin";
$day[Tuesday]="Selasa";
$day[Wednesday]="Rabu";
$day[Thursday]="Kamis";
$day[Friday]="Jumat";
$day[Saturday]="Sabtu";
$hari=$day[$mintahari];
}
?>
