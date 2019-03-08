<?php
$mail_to = "zphmusic@gmail.com";
$mail_subject    = "DISTRO OBJEDNAVKA ";
$mail_from		= $_POST['mail'];

if ('POST' == $_SERVER['REQUEST_METHOD'])
{
	$mail_text = "Kontaktný formulár: " . date("d.m.Y - H:i") . "\n";
	$mail_text .="**************************************\n\n";
	$mail_text .="Meno: " . $_POST['meno']."\n";
	$mail_text .="Priezvisko: " . $_POST['priezvisko']."\n";
	$mail_text .="Ulica: " . $_POST['ulica']."\n";
	$mail_text .="Mesto: " . $_POST['mesto']."\n";
	$mail_text .="PSC: " . $_POST['psc']."\n";
	$mail_text .="Telefon: " . $_POST['telefon']."\n";
	$mail_text .="E-mail: " . $_POST['mail']."\n";
	$mail_text .="********* OBJEDNANE ********\n\n";

	$mail_text .="TRIKO NASRAC BIELE: " . $_POST['triko-nasrac-biele']."\n";
	$mail_text .="TRIKO NASRAC CIERNE: " . $_POST['triko-nasrac-cierne']."\n";
	$mail_text .="TRIKO NASRAC CERVENE: " . $_POST['triko-nasrac-cervene']."\n";
	$mail_text .="TRIKO NASRAC ZELENE: " . $_POST['triko-nasrac-zelene']."\n";
	$mail_text .="TRIKO NASRAC S: " . $_POST['triko-nasrac-s']."\n";
	$mail_text .="TRIKO NASRAC M: " . $_POST['triko-nasrac-m']."\n";
	$mail_text .="TRIKO NASRAC L: " . $_POST['triko-nasrac-l']."\n";
	$mail_text .="TRIKO NASRAC XL: " . $_POST['triko-nasrac-xl']."\n\n";

	$mail_text .="CD NERVAK: " . $_POST['cd-nervak']."\n\n";	

	$mail_text .="TRIKO NF BIELE: " . $_POST['triko-nf-biele']."\n";
	$mail_text .="TRIKO NF CIERNE: " . $_POST['triko-nf-cierne']."\n";
	$mail_text .="TRIKO NF CERVENE: " . $_POST['triko-nf-cervene']."\n";
	$mail_text .="TRIKO NF ZELENE: " . $_POST['triko-nf-zelene']."\n";
	$mail_text .="TRIKO NF S: " . $_POST['triko-nf-s']."\n";
	$mail_text .="TRIKO NF M: " . $_POST['triko-nf-m']."\n";
	$mail_text .="TRIKO NF L: " . $_POST['triko-nf-l']."\n";
	$mail_text .="TRIKO NF XL: " . $_POST['triko-nf-xl']."\n\n";

	$mail_text .="CD HOMO COMMERCIAL: " . $_POST['cd-homocommercial']."\n\n";

	$mail_text .="TRIKO HF LF S: " . $_POST['triko-hflf-s']."\n";
	$mail_text .="TRIKO HF LF M: " . $_POST['triko-hflf-m']."\n";
	$mail_text .="TRIKO HF LF L: " . $_POST['triko-hflf-l']."\n";
	$mail_text .="TRIKO HF LF XL: " . $_POST['triko-hflf-xl']."\n\n";

	$mail_text .="CD ADDICT: " . $_POST['cd-addict']."\n";
	$mail_text .="CD DIVADLO: " . $_POST['cd-divadlo']."\n";
	$mail_text .="CD LITERATURA FUCKTU: " . $_POST['cd-hf-lf']."\n\n";

	$mail_text .="Tricko ZPH M: " . $_POST['triko-zph-m']."\n";
	$mail_text .="Tricko ZPH L: " . $_POST['triko-zph-l']."\n";
	$mail_text .="Odznak 10 PR KF: " . $_POST['o-10prkf']."\n";
	$mail_text .="Odznak ZOPSAHLAVA: " . $_POST['o-zph']."\n";
	$mail_text .="CD LADOVA FEST: " . $_POST['cd-va-lf']."\n";
	$mail_text .="Odznak PLANETA POKRYTCOV: " . $_POST['o-pp']."\n";
	$mail_text .="CD V MASKACH: " . $_POST['cd-zph-vm']."\n";
	$mail_text .="CD DVE NULY: " . $_POST['cd-zph-dvenuly']."\n";
	
	$mail_text .="**************************************\n\n";
	$mail_text .="Poznamka: " . $_POST['text']."\n";

	//send email
	@mail($mail_to,$mail_subject,$mail_text,"From:". $mail_from ."\n"."MIME-Version: 1.0\r\n"."Content-type: text/plain; charset=utf-8\r\n"."Content-Transfer-Encoding: 8bit");
	
}
include('distro_send.php');
?>
