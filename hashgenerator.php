<?php
include 'baglan.php';
$db = new BasicDB('localhost', 'hash', 'root', '123456789');



	


	


function sifreureteci(){

 $karakterler = "1234567890abcdefghijKLMNOPQRSTuvwxyzABCDEFGHIJklmnopqrstUVWXYZ0987654321";
 $sifre = '';
 for($i=0;$i<8;$i++)                    
 {
  $sifre .= $karakterler{rand() % 72};    
 }
 return $sifre;                            
}



for ($i=0; $i <100000 ; $i++) { 
$sifre=sifreureteci();
$md5=md5($sifre);



	

$insert = $db->insert('hash')
	->set(array(
		'sifre' => $sifre,
		'hash' => $md5
	));




}


?>
